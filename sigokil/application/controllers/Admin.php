<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct() {
        parent::__construct();

        $this->load->model('userM_model');
        $this->load->model('dataIrigasi_model');
        $this->load->model('dataIrigasi2_model');
        $this->load->model('dataJaringan_model');
        $this->load->model('dataManfaat_model');
        $this->load->model('dataPerluasan_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datairigasi'] = $this->dataIrigasi_model->jumlah();
        $data['datairigasi2'] = $this->dataIrigasi2_model->jumlah();
        $data['datajaringan'] = $this->dataJaringan_model->jumlah();
        $data['datamanfaat'] = $this->dataManfaat_model->jumlah();
        $data['dataperluasan'] = $this->dataPerluasan_model->jumlah();
        $data['user'] = $this->userM_model->jumlah();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

    public function user() {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["user"] = $this->userM_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar2.php", $data);
        $this->load->view("admin/user", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('Admin/user');

        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->userM_model->rules());

        if ($this->form_validation->run()) {
            $this->userM_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $this->userM_model->getById($id);

        if (!$data["user"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar2.php", $data);
        $this->load->view("admin/edit_user", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->userM_model->delete($id)) {
            redirect(base_url('Admin/user'));
        }
    }
}