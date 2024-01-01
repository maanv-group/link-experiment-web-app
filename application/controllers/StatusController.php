<?php

class StatusController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function forbidden_403(){
		$this->load->view('status/forbidden');
	}
	
	public function coming_soon(){
		$this->load->view('status/coming_soon');
	}

	public function maintenance(){
		$this->load->view('status/maintenance');
	}
}
