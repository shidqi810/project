<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct() {
        parent::__construct();

        $this->load->model('UserM_model');
        $this->load->model('Pembelian_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datairigasi2'] = $this->Pembelian_model->jumlah();
        $data['banyakUser'] = $this->UserM_model->jumlah();
        $data['banyakTransaksi'] = $this->Pembelian_model->jumlah();
        $data['totalPembelian'] = $this->Pembelian_model->total();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

    public function user() {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["userM"] = $this->UserM_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("admin/user", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('Admin/user');

        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->UserM_model->rules());

        if ($this->form_validation->run()) {
            $this->UserM_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["userM"] = $this->UserM_model->getById($id);

        if (!$data["user"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("admin/edit_user", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->UserM_model->delete($id)) {
            redirect(base_url('Admin/user'));
        }
    }
}