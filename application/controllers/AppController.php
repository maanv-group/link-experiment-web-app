<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShortURLModel');
	}
	public function home()
	{
		$this->load->view('bitly/home');
	}

	public function process()
	{
		$formdata = $this->input->post();
		$data = [
			'url' => $formdata['url'],
			'domain' => $formdata['domain'],
			'segment' => $formdata['segment']
		];
		$string = $this->ShortURLModel->shorten($data);

		$this->data['url'] = $string;

		$this->load->view('bitly/home', $this->data);
		/*
		Save into Database
		*/
	}
}
