<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {


	public function index()
	{	
		$this->load->view('errors/html/error_403');
	}
	
	public function first_run () {
		$data['content'] = 'help/first-run';
		
		$data['styles']  = add_custom_styles(array('css/style'));
		$data['scripts'] = add_custom_scripts(array('js/script'));
		$this->load->view('layout', $data);
	}
}
