<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()
	{
		$this->load->view('errors/html/error_403');
	}
	
	public function secret () {
		$get = $_GET;
		
		$data['content'] = 'backend/secret';
		$data['first']   = (isset($get['first']) && !empty($get['first'])) ? $get['first'] : '';
		
		$data['styles']  = add_custom_styles(array('css/style'));
		$data['scripts'] = add_custom_scripts(array('js/script', 'js/script.backend'));
		$this->load->view('layout', $data);
	}
}
