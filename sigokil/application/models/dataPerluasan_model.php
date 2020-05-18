<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataPerluasan_model extends CI_Model {
    private $_table = "dataperluasan";
    
    public $id_perluasan;
    public $tanggal_perluasan;
    public $deskripsi_perluasan;
    public $file_perluasan;
    
    public function rules() {
        return [
            ['field' => 'deskripsi_perluasan',
            'label' => 'Deskripsi_perluasan',
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
        $this->db->order_by('id_perluasan', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_perluasan" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_perluasan = uniqid();
        // $this->tanggal = ;
        $this->deskripsi_perluasan = $post["deskripsi_perluasan"];
        $this->file_perluasan = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/perluasan/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
        $config['max_size']             = 60024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_perluasan')) {
            return $this->upload->data("file_name");
        }        
    }

    public function update() {
        $post = $this->input->post();

        $this->id_perluasan = $post["id"];
        $this->deskripsi_perluasan = $post["deskripsi_perluasan"];

        if (!empty($_FILES["file_perluasan"]["name"])) {
            $this->file_perluasan = $this->_uploadImage();
        }
        else
        {
            $this->file_perluasan = ["file_perluasan"];
        }

        $this->db->update($this->_table, $this, array('id_perluasan' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_perluasan" => $id));
    }
}