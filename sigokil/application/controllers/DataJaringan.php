<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJaringan extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('dataJaringan_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Jaringan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["datajaringan"] = $this->dataJaringan_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("jaringan/jaringan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Jaringan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataJaringan_model->rules());

        if ($this->form_validation->run()) {
            $this->dataJaringan_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            redirect('DataJaringan');
        }
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('DataJaringan');

        $data['title'] = 'Jaringan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataJaringan_model->rules());

        if ($this->form_validation->run()) {
            $this->dataJaringan_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datajaringan"] = $this->dataJaringan_model->getById($id);

        if (!$data["datajaringan"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("jaringan/edit_Jaringan", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataJaringan_model->delete($id)) {
            redirect(base_url('DataJaringan'));
        }
    }
}
