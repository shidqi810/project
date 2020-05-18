<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('Pembelian_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Stok';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["pembelian"] = $this->Pembelian_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("stok/list", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Stok';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->Pembelian_model->rules2());

        if ($this->form_validation->run()) {
            $this->Pembelian_model->save2();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("stok/new_form");
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('Stok');

        $data['title'] = 'Stok';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->Pembelian_model->rules2());

        if ($this->form_validation->run()) {
            $this->Pembelian_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembelian"] = $this->Pembelian_model->getById($id);

        if (!$data["pembelian"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("stok/edit_form", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->Pembelian_model->delete($id)) {
            redirect(base_url('Stok'));
        }
    }
}
