<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('index/index');
	}

	public function faq()
	{
		$this->load->view('faq/index');
	}

	public function tentangkami()
	{
		$this->load->view('tentangkami/index');
	}
}