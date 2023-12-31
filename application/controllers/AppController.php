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
	public function thank_you()
	{
		$this->load->view('bitly/thank-you');
	}
	

	public function process()
	{
		$formdata = $this->input->post();
		$data = [
			'url' => $formdata['url'],
			'domain' => $formdata['domain']??= base_url('link'),
			'segment' => $formdata['segment']??=""
		];
		/*
		Save into Database
		*/
		$string = $this->ShortURLModel->shorten($data);
		$data['segment'] = $string;
		
		$domain = "";
		if($data['domain'] != ""){
			$domain = trim($data['domain'], '/');
		}
		$string = $domain . '/' . $string;

		if($this->ShortURLModel->insert($data)){
			$this->data['url'] = $string;
		}

		$this->session->set_flashdata('short_data', $this->data);
		redirect('app/thank-you');
	}
}
