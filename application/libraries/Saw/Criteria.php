<?php 
/**
* Class for mapping criteria based on configuration.
*
* @package    Saw
* @author     Azhary Arliansyah
* @version    1.0
*/

require_once(__DIR__ . '/Config.php');

class Criteria
{
	public $config;
	public $type;

	public function __construct()
	{
		$this->config = Config::$config;
	}

	public function set_type($type)
	{
		$this->type = $type;
	}

	public function set_config($config)
	{
		$this->config = $config;
	}

	public function get_type()
	{
		return $this->type;
	}

	public function get_config()
	{
		return $this->config;
	}

	public function fit($data, $exclude_key = [])
	{
		$result = [];
		foreach ($data as $row)
		{
			$result_row = [];
			foreach ($row as $key => $value)
			{
				if (!in_array($key, $exclude_key))
				{
					$result_row[$key] = $this->feature_map($key, $value);
				}
			}
			$result []= $result_row;
		}

		return $result;
	}

	private function feature_map($key, $value)
	{
		switch ($this->config[$key]['type'])
		{
			case 'range':
				foreach ($this->config[$key]['values'] as $opt)
				{
					if ($opt['min'] === null)
					{
						if ($value <= $opt['max'])
						{
							return $opt['value'];
						}
					}
					elseif ($opt['max'] === null) 
					{
						if ($value >= $opt['min'])
						{
							return $opt['value'];
						}
					}
					else
					{
						if ($value >= $opt['min'] && $value <= $opt['max'])
						{
							return $opt['value'];
						}
					}
				}

				break;

			case 'option':
				$possible_values = [];
				$cvalue = json_decode($value);
				foreach ($this->config[$key]['values'] as $opt)
				{
					if (is_array($cvalue))
					{
						foreach ($cvalue as $v)
						{
							if ($v === $opt['label'])
							{
								$possible_values []= $opt['value'];
							}
						}
					}
					elseif (!is_array($cvalue) && $value === $opt['label'])
					{
						return $opt['value'];
					}
				}

				$len = count($possible_values);
				if ($len == 0) return 0;
				else if ($len == 1) return $possible_values[0];	

				return max($possible_values);

			case 'criteria':
				$criteria = $this->config[$key]['values'];
				$result = 0;
				
				foreach ($value as $k => $v)
				{
					$sum = 0;
					$criteria_value = $criteria[$k]['values'];
					foreach ($v as $kk => $vv)
					{
						if (isset($criteria_value[$kk]['values'][$vv]))
						{
							$sum += $criteria_value[$kk]['values'][$vv];
						}
						else
						{
							$cvalues = $criteria_value[$kk]['values'];
							$min_key = array_keys($cvalues, min($cvalues));
							$sum += $cvalues[$min_key[0]];
						}
					}
					$sum *= $criteria[$k]['weight'];
					$result += $sum;
				}

				return $result;
		}

		return null;
	}
}