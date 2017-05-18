<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		$data['content'] = 'signin';
		
		$data['styles']  = add_custom_styles(array('css/style'));
		$data['scripts'] = add_custom_scripts(array('js/script','js/script.signin'));
		$this->load->view('layout', $data);
	}
}
