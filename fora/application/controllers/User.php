<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct() {
        parent::__construct();

        $this->load->model('Hapus_model');
		$this->load->helper('url');
        $this->load->model('keuangan_model');
        $this->load->model('keputusan_model');
        $this->load->library('form_validation');
    }

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
					$this->session->set_userdata('image', $new_image);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->session->set_userdata('name', $name);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Akun Anda Telah Berhasil Diperbarui!</div>');
			redirect('user');
		}
	}

	public function forum()
	{
		$data['title'] = 'Forum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id_hal = $this->input->post('id_hal');
		$data['forum_topik'] = $this->db->get_where('for', ['for_id' => $id_hal])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/forum', $data);
		$this->load->view('templates/footer');

	}

	public function forum_topik()
	{
		$data['title'] = 'Forum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_hal = $this->input->post('id_hal');
		//$data['forum_topik'] = $this->db->get_where('for', ['for_id' => $id_hal])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/forum_topik', $data);
		$this->load->view('templates/footer');	
	}


	public function komen()
	{
		$data['title'] = 'Forum';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

								//ini variabel		ini label
		$this->form_validation->set_rules('fork', 'Fork', 'required|trim',
		[
			'required' => 'Tidak Bisa Mensubmit Jawaban Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/forum', $data);
			$this->load->view('templates/footer');
		}
		else 
		{
		$data = [
			'fork' => $this->input->post('fork'),
			'tanggalk' => time(),
			'komen_id' => $this->input->post('komen_id'),
			'komen_name' => $this->session->userdata('name'),
			'komen_image' => $this->session->userdata('image'),
			'komen_user' => $this->input->post('komen_user')
			];

			//cek jika ada gambar yg di upload
			$upload_fotok = $_FILES['fotok']['name'];

			if ($upload_fotok)
			{
				$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
				$config['max_size']     = '10048';
				$config['upload_path'] = './assets/forum/komen/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('fotok'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_fotok = 'default.png';
					if ($old_fotok != 'default.png')
					{
						unlink(FCPATH . 'assets/forum/' . $old_fotok);
					}

					$new_fotok = $this->upload->data('file_name');
					$this->db->set('fotok', $new_fotok);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

			$this->db->insert('for_komen', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Anda Berhasil di Submit!</div>');
			redirect('user/forum_topik');
		}
	}

	public function keuangan()
	{
		$data['title'] = 'Keuangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["keuangan"] = $this->keuangan_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user/keuangan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
	}

    public function keputusan() {
        $data['title'] = 'Hasil keputusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["keputusan"] = $this->keputusan_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user/keputusan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }

    public function hapus($id) {
        $where = array('id' => $id);
		$this->Hapus_model->hapus_data($where,'for');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Forum Telah Berhasil di Hapus!</div>');
		redirect('user/forum_topik');
    }

    public function hapus_komen($id) {
        $where = array('id' => $id);
		$this->Hapus_model->hapus_data($where,'for_komen');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Telah Berhasil di Hapus!</div>');
		redirect('user/forum_topik');
    }
}