<?php

class MY_Controller extends CI_Controller
{
  	public $title 		= 'Bujang Gadis Palembang 2020';
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('lib_log');
		date_default_timezone_set("Asia/Jakarta");
	}

	protected function template($data, $module = '')
	{
		$data['global_title'] 	= $this->title;
		$data['module']			= $module;
		if ( strlen( $module ) > 0 ) return $this->load->view( $module . '/includes/layout', $data );
	    return $this->load->view( 'includes/layout', $data );
	}

	protected function POST($name)
	{
		return $this->input->post($name);
	}

	protected function GET($name, $clean = false)
	{
		return $this->input->get($name, $clean);
	}

	protected function METHOD()
	{
		return $this->input->method();
	}

	protected function flashmsg($msg, $type = 'success',$name='msg')
	{
		return $this->session->set_flashdata($name, '<div class="alert alert-'.$type.' alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$msg.'</div>');
	}

	protected function upload($id, $directory, $tag_name = 'userfile', $max_size = 0)
	{
		if ( isset( $_FILES[$tag_name] ) && !empty( $_FILES[$tag_name]['name'] ) )
		{
			$upload_path = realpath(FCPATH . 'assets/' . $directory . '/');
			@unlink($upload_path . '/' . $id . '.jpg');
			$config = [
				'file_name' 		=> $id . '.jpg',
				'allowed_types'		=> 'jpg|png|bmp|jpeg',
				'upload_path'		=> $upload_path,
				'max_size'			=> $max_size
			];
			$this->load->library('upload');
			$this->upload->initialize($config);
			return $this->upload->do_upload($tag_name);
		}
		return FALSE;
	}

	protected function dump($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}

	protected function go_back( $index ) 
	{
		echo '<script type="text/javascript">window.history.go(' . $index . ');</script>'; 
	}

	protected function check_allowance( $condition, $message = [ 'Required parameter is missing', 'danger' ], $redirect_index = -1 )
	{
		if ( $condition ) 
		{

			$this->flashmsg( $message[0], $message[1] );
			$this->go_back( $redirect_index );
			exit;

		}
	}

	protected function __generate_random_id() 
	{
		return mt_rand();
	}

	protected function remove_directory($path) 
	{
	    $files = array_diff(scandir($path), ['.', '..']);
	    foreach ($files as $file) 
	    {
	    	if (is_dir($file))
	    	{
	    		removeDirectory($file);	
	    	}
	    	else
	    	{
	    		if (file_exists($file))
	    		{
	    			unlink($file);
	    		}
	    	}
	    }
	    rmdir($path);
	    return;
	}

	protected function send_mail($address, $subject, $body){
		$this->load->library('CI_PHPMailer/ci_phpmailer');
        try 
        {
            $this->ci_phpmailer->setServer('smtp.gmail.com');
            $this->ci_phpmailer->setAuth('inipudinglab@gmail.com', 'Manusia@123');
            $this->ci_phpmailer->setAlias('admin@bgpalembang.com', 'Bujang Gadis Palembang 2020');
            $this->ci_phpmailer->sendMessage($address, $subject, $body);
        } 
        catch (Exception $e)
        {
            $this->ci_phpmailer->displayError();
        }
	}

	protected function send_mail2($address, $subject, $body){
		$this->load->library('gz');
        $data = [
            'email' => $address,
            'subject' => $subject,
            'text' => $body,
            'name' => 'Pendaftaran Bujang Gadis Palembang 2020'
        ];

        return json_decode($this->gz->POST('http://65.52.168.164:4000/send-email', $data));
	}
}
