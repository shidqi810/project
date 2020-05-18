<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPerluasan extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('dataPerluasan_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Perluasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["dataperluasan"] = $this->dataPerluasan_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("perluasan/perluasan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Perluasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataPerluasan_model->rules());

        if ($this->form_validation->run()) {
            $this->dataPerluasan_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            redirect('DataPerluasan');
        }
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('DataPerluasan');

        $data['title'] = 'Perluasan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataPerluasan_model->rules());

        if ($this->form_validation->run()) {
            $this->dataPerluasan_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dataperluasan"] = $this->dataPerluasan_model->getById($id);

        if (!$data["dataperluasan"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("perluasan/edit_perluasan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataPerluasan_model->delete($id)) {
            redirect(base_url('DataPerluasan'));
        }
    }
}
