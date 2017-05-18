<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['content'] = 'home';
		
		$data['styles']  = add_custom_styles(array('css/style', 'css/style.home'));
		$data['scripts'] = add_custom_scripts(array('js/script', 'js/home'));
		$this->load->view('layout', $data);
	}
}
