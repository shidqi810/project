<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct() {
        parent::__construct();

        $this->load->model('datairigasi_model');
        $this->load->model('datairigasi2_model');
        $this->load->model('dataPerluasan_model');
        $this->load->model('dataJaringan_model');
        $this->load->model('dataManfaat_model');
        $this->load->model('pengumuman_model');
    }

	public function index()	
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Halaman Login';
			$data["datairigasi"] = $this->datairigasi_model->getAll();
			$data["datairigasi2"] = $this->datairigasi2_model->getAll();
			$data["dataperluasan"] = $this->dataPerluasan_model->getAll();
			$data["datamanfaat"] = $this->dataManfaat_model->getAll();
			$data["datajaringan"] = $this->dataJaringan_model->getAll();
			$data["dataadmin"] = $this->pengumuman_model->getAll();
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');

		}
		else
		{
			$this->_login();
		}
		
	}

	public function irigasi2019()	
	{
		$data['title'] = 'Progress Pengerjaan 2019';
		$data["datairigasi"] = $this->datairigasi_model->getAll();
		$data["datairigasi2"] = $this->datairigasi2_model->getAll();
		$data["dataperluasan"] = $this->dataPerluasan_model->getAll();
		$data["datamanfaat"] = $this->dataManfaat_model->getAll();
		$data["datajaringan"] = $this->dataJaringan_model->getAll();
		$data["dataadmin"] = $this->pengumuman_model->getAll();
		$this->load->view('templates/auth_header3', $data);
		$this->load->view('auth/irigasi2019');
		$this->load->view('templates/auth_footer');

		$this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
	}

	public function irigasi2020()	
	{
		$data['title'] = 'Rencana Pekerjaan Irigasi 2020';
		$data["datairigasi"] = $this->datairigasi_model->getAll();
		$data["datairigasi2"] = $this->datairigasi2_model->getAll();
		$data["dataperluasan"] = $this->dataPerluasan_model->getAll();
		$data["datamanfaat"] = $this->dataManfaat_model->getAll();
		$data["datajaringan"] = $this->dataJaringan_model->getAll();
		$data["dataadmin"] = $this->pengumuman_model->getAll();
		$this->load->view('templates/auth_header4', $data);
		$this->load->view('auth/irigasi2020');
		$this->load->view('templates/auth_footer');

		$this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if($user) //user ada
		{
			//usernya aktif
			if($user['is_active'] == 1)
			{
				//cek password
				if(password_verify($password, $user['password']))
				{
					$data = [
						'id' => $fis['id'],
						'name' => $user['name'],
						'image' => $user['image'],
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1)
					{
						redirect('admin');
					}
					else 
					{
						redirect('user');
					}
					redirect('user');
				}
				else
				{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mohon Maaf Password Anda Salah!</div>');
					redirect('auth');
				}
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Anda Belum Teraktivasi!</div>');
				redirect('auth');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Anda Belum Terdaftar!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email Ini Telah Terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password Tidak sama dengan yang sebelumnya!',
			'min_length' => 'Minimal Password 6 Karakter!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false)
		{
			$data['title'] = 'Halaman Registrasi';
			$data["datairigasi"] = $this->datairigasi_model->getAll();
			$data["datairigasi2"] = $this->datairigasi2_model->getAll();
			$data["dataperluasan"] = $this->dataPerluasan_model->getAll();
			$data["datamanfaat"] = $this->dataManfaat_model->getAll();
			$data["datajaringan"] = $this->dataJaringan_model->getAll();
			$data["dataadmin"] = $this->pengumuman_model->getAll();
			$this->load->view('templates/auth_header2', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		}
		else 
		{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil di Daftarkan! Silahkan Lakukan Login!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Berhasil Logout!</div>');
			redirect(base_url());
	}

}