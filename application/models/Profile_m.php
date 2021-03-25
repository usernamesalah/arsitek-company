<?php defined('BASEPATH') || exit('No direct script allowed');

class Profile_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'profile';
		$this->data['primary_key'] = 'id';
	}
}

