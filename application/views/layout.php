<?php

	$this->load->view('header');
	
	$this->load->view('navbar');
	
	$this->load->view('content/'.$content);
	
	$this->load->view('footer');