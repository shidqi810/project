<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct() {
        parent::__construct();

		$this->load->helper('url');
        $this->load->model('dataIrigasi_model');
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

    public function Irigasi() {
        $data['title'] = 'Data Irigasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["datairigasi"] = $this->dataIrigasi_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user/list", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Data Irigasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user/new_form");
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function editIrigasi($id = null) {
        if (!isset($id)) redirect('User/Irigasi');

        $data['title'] = 'Data Irigasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datairigasi"] = $this->dataIrigasi_model->getById($id);

        if (!$data["datairigasi"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user/edit_form", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataIrigasi_model->delete($id)) {
            redirect(base_url('DataIrigasi'));
        }
    }
}