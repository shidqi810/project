<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim',
		[
			'required' => 'Nama Tidak Boleh Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//cek jika ada gambar yg di upload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image)
			{
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Akun Anda Telah Berhasil Diperbarui!</div>');
			redirect('user');
		}
	}

	public function fisika()
	{
		$data['title'] = 'Fisika';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

								//ini variabel		ini label
		$this->form_validation->set_rules('soal', 'Soal', 'required|trim',
		[
			'required' => 'Tidak Bisa Mensubmit Soal Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/fisika', $data);
			$this->load->view('templates/footer');
		}
		else 
		{
		$da = [
			'soal' => $this->input->post('soal'),
			'tanggal' => time(),
			'fis_name' => $this->session->userdata('name'),
			'fis_image' => $this->session->userdata('image')
			];

			//cek jika ada gambar yg di upload
			$upload_foto = $_FILES['foto']['name'];

			if ($upload_foto)
			{
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/fisika/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_foto = 'default.png';
					if ($old_foto != 'default.png')
					{
						unlink(FCPATH . 'assets/fisika/' . $old_foto);
					}

					$new_foto = $this->upload->data('file_name');
					$this->db->set('foto', $new_foto);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			$this->db->insert('fis', $da);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pertanyaan Anda Berhasil di Submit!</div>');
			redirect('user/fisika');
		}
	}

	public function komen()
	{
		$data['title'] = 'Fisika';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

								//ini variabel		ini label
		$this->form_validation->set_rules('soalk', 'Soalk', 'required|trim',
		[
			'required' => 'Tidak Bisa Mensubmit Soal Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/fisika', $data);
			$this->load->view('templates/footer');
		}
		else 
		{
		$data = [
			'soalk' => $this->input->post('soalk'),
			'tanggalk' => time(),
			'komen_id' => $this->input->post('komen_id'),
			'komen_name' => $this->session->userdata('name'),
			'komen_image' => $this->session->userdata('image')
			];

			//cek jika ada gambar yg di upload
			$upload_fotok = $_FILES['fotok']['name'];

			if ($upload_fotok)
			{
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/fisika/komen/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('fotok'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_fotok = 'default.png';
					if ($old_fotok != 'default.png')
					{
						unlink(FCPATH . 'assets/fisika/' . $old_fotok);
					}

					$new_fotok = $this->upload->data('file_name');
					$this->db->set('fotok', $new_fotok);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

			$this->db->insert('fis_komen', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pertanyaan Anda Berhasil di Submit!</div>');
			redirect('user/fisika');
		}
	}
}