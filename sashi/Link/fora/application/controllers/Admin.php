<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct() {
        parent::__construct();

        $this->load->model('Hapus_model');
		$this->load->helper('url');
    }

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	
	public function struktur()
	{
		$data['title'] = 'Struktur Organisasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name_pengurus', 'Name_pengurus', 'required|trim',
		[
			'required' => 'Nama Tidak Boleh Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/struktur', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$id = $this->input->post('id');
			$name_pengurus = $this->input->post('name_pengurus');
			$motto = $this->input->post('motto');
			$whatsapp = $this->input->post('whatsapp');
			$facebook = $this->input->post('facebook');
			$instagram = $this->input->post('instagram');

			//cek jika ada gambar yg di upload
			$upload_image = $_FILES['foto_pengurus']['name'];

			if ($upload_image)
			{
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '4048';
				$config['upload_path'] = './assets/img/pengurus/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto_pengurus'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_image = $kepengurusan['foto_pengurus'];
					if ($old_image != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/pengurus/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('foto_pengurus', $new_image);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name_pengurus', $name_pengurus);
			$this->db->set('motto', $motto);
			$this->db->set('whatsapp', $whatsapp);
			$this->db->set('facebook', $facebook);
			$this->db->set('instagram', $instagram);
			$this->db->where('id', $id);
			$this->db->update('kepengurusan');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kepengurusan Telah Berhasil Diperbarui!</div>');
			redirect('admin/struktur');
		}
	}

	public function tambah_struktur()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name_pengurus', 'Name_pengurus', 'required|trim',
		[
			'required' => 'Nama Tidak Boleh Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/struktur', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$da = [
				'foto_pengurus' => 'default.jpg',
				'name_pengurus' => $this->input->post('name_pengurus'),
				'motto' => $this->input->post('motto'),
				'jabatan' => $this->input->post('jabatan'),
				'whatsapp' => $this->input->post('whatsapp'),
				'facebook' => $this->input->post('facebook'),
				'instagram' => $this->input->post('instagram'),
			];
		}

			$this->db->insert('kepengurusan', $da);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kepengurusan Telah Berhasil Ditambahkan!</div>');
			redirect('admin/struktur');
		
	}

	public function topik()
	{
		$data['title'] = 'Post Topik';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

								//ini variabel		ini label
		$this->form_validation->set_rules('forum', 'Forum', 'required|trim',
		[
			'required' => 'Tidak Bisa Mensubmit Diskusi Kosong!'
		]);

		$this->form_validation->set_rules('judul', 'Judul', 'required|trim',
		[
			'required' => 'Judul Tidak Boleh Kosong!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/topik', $data);
			$this->load->view('templates/footer');
		}
		else 
		{
		$da = [
			'forum' => $this->input->post('forum'),
			'judul' => $this->input->post('judul'),
			'tanggal' => time(),
			'for_name' => $this->session->userdata('name'),
			'for_image' => $this->session->userdata('image'),
			'for_id' => $this->input->post('id_hal'),
			'for_user' => $this->input->post('for_user')
			];

			//cek jika ada gambar yg di upload
			$upload_foto = $_FILES['foto']['name'];

			if ($upload_foto)
			{
				$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
				$config['max_size']     = '10048';
				$config['upload_path'] = './assets/forum/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto'))
				{
					//untuk menghapus gambar profile yg tak terpakai
					$old_foto = 'default.png';
					if ($old_foto != 'default.png')
					{
						unlink(FCPATH . 'assets/forum/' . $old_foto);
					}

					$new_foto = $this->upload->data('file_name');
					$this->db->set('foto', $new_foto);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			$this->db->insert('for', $da);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Topik Telah Berhasil di Submit di Forum!</div>');
			redirect('admin/topik');
		}
	}

	public function edit_halaman()
	{
		$data['title'] = 'Post Topik';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_topik', 'Nama_Topik', 'required', [
			'required' => 'Nama Topik Tidak Boleh Kosong!'
		]);

		if($this->form_validation->run() == false ){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/topik', $data);
			$this->load->view('templates/footer');
		}
		else {
			$namatopik = $this->input->post('nama_topik');
			$idhal = $this->input->post('id_hal');

			$this->db->set('nama_topik', $namatopik);
			$this->db->where('id_hal', $idhal);
			$this->db->update('halaman_topik');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Topik Telah Diperbarui!</div>');
			
			redirect('admin/topik');
		}
	}

	public function halaman()
	{
		$data['title'] = 'Post Topik';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_topik', 'Nama_Topik', 'required', [
			'required' => 'Nama Topik Tidak Boleh Kosong!'
		]);

		if($this->form_validation->run() == false ){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/topik', $data);
			$this->load->view('templates/footer');
		}
		else {
			$data = [
				'nama_topik' => $this->input->post('nama_topik'),
			];
			$this->db->insert('halaman_topik', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Topik Baru Telah Ditambahkan!</div>');
					redirect('admin/topik');
		}
		
	}

	public function hapus($id) {
        $where = array('id' => $id);
		$this->Hapus_model->hapus_data($where,'kepengurusan');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kepengurusan Telah Berhasl di Hapus!</div>');
		redirect('admin/struktur');
    }

    public function hapus_topik($id_hal) {
        $where = array('id_hal' => $id_hal);
		$this->Hapus_model->hapus_data($where,'halaman_topik');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Topik Telah Berhasl di Hapus!</div>');
		redirect('admin/topik');
    }

	public function delete1($id_hal=null) {
        if (!isset($id_hal)) show_404();
        
        if ($this->Hapus_model->delete($id_hal)) {
            redirect(base_url('admin/topik'));
        }
    }
}