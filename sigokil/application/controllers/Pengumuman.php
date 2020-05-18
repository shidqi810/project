<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('pengumuman_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["dataadmin"] = $this->pengumuman_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("pengumuman/pengumuman", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->pengumuman_model->rules());

        if ($this->form_validation->run()) {
            $this->pengumuman_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            redirect('Pengumuman');
        }
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('Pengumuman');

        $data['title'] = 'Pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->pengumuman_model->rules());

        if ($this->form_validation->run()) {
            $this->pengumuman_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dataadmin"] = $this->pengumuman_model->getById($id);

        if (!$data["dataadmin"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("pengumuman/edit_pengumuman", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->pengumuman_model->delete($id)) {
            redirect(base_url('DataManfaat'));
        }
    }
}
