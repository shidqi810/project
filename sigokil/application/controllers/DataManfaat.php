<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataManfaat extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('dataManfaat_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Manfaat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["datamanfaat"] = $this->dataManfaat_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("manfaat/manfaat", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Manfaat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataManfaat_model->rules());

        if ($this->form_validation->run()) {
            $this->dataManfaat_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            redirect('DataManfaat');
        }
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('DataManfaat');

        $data['title'] = 'Manfaat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataManfaat_model->rules());

        if ($this->form_validation->run()) {
            $this->dataManfaat_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datamanfaat"] = $this->dataManfaat_model->getById($id);

        if (!$data["datamanfaat"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("manfaat/edit_manfaat", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataManfaat_model->delete($id)) {
            redirect(base_url('DataManfaat'));
        }
    }
}
