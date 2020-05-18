<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function index()	
	{
		$data['title'] = 'Galeri';
		$this->load->view('templates/header', $data);
		$this->load->view('galeri_foto/index');
		$this->load->view('templates/footer');
	}

	public function galeri_video()	
	{
		$data['title'] = 'Galeri Video';
		$this->load->view('templates/header', $data);
		$this->load->view('galeri_video/index');
		$this->load->view('templates/footer');
	}

	public function galeri_harga()	
	{
		$data['title'] = 'Galeri Harga';
		$this->load->view('templates/header', $data);
		$this->load->view('galeri_harga/index');
		$this->load->view('templates/footer');
	}
}