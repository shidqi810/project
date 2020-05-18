<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataJaringan_model extends CI_Model {
    private $_table = "datajaringan";
    
    public $id_jaringan;
    public $tanggal_jaringan;
    public $deskripsi_jaringan;
    public $file_jaringan;
    
    public function rules() {
        return [
            ['field' => 'deskripsi_jaringan',
            'label' => 'Deskripsi_jaringan',
            'rules' => 'required']
        ];
    }

    public function jumlah()
    {   
        $query = $this->db->get($this->_table);
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function getAll() {
        $this->db->order_by('id_jaringan', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_jaringan" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_jaringan = uniqid();
        // $this->tanggal = ;
        $this->deskripsi_jaringan = $post["deskripsi_jaringan"];
        $this->file_jaringan = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/jaringan/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
        $config['max_size']             = 60024; // 60MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_jaringan')) {
            return $this->upload->data("file_name");
        }        
    }

    public function update() {
        $post = $this->input->post();

        $this->id_jaringan = $post["id"];
        $this->deskripsi_jaringan = $post["deskripsi_jaringan"];

        if (!empty($_FILES["file_jaringan"]["name"])) {
            $this->file_jaringan = $this->_uploadImage();
        }
        else
        {
            $this->file_jaringan = ["file_jaringan"];
        }

        $this->db->update($this->_table, $this, array('id_jaringan' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_jaringan" => $id));
    }
}