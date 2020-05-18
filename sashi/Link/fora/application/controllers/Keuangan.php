<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('keuangan_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Post Keuangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["keuangan"] = $this->keuangan_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("keuangan/list", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);

    }


    public function add() {
        $data['title'] = 'Post Keuangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->keuangan_model->rules());

        if ($this->form_validation->run()) {
            $this->keuangan_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("keuangan/new_form");
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('keuangan');

        $data['title'] = 'Post Keuangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules($this->keuangan_model->rules());

        if ($this->form_validation->run()) {
            $this->keuangan_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["keuangan"] = $this->keuangan_model->getById($id);

        if (!$data["keuangan"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("keuangan/edit_form", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
        
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->keuangan_model->delete($id)) {
            redirect(base_url('keuangan'));
        }
    }
}