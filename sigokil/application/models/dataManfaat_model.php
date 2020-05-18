<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataManfaat_model extends CI_Model {
    private $_table = "datamanfaat";
    
    public $id_manfaat;
    public $tanggal_manfaat;
    public $deskripsi_manfaat;
    public $file_manfaat;
    
    public function rules() {
        return [
            ['field' => 'deskripsi_manfaat',
            'label' => 'Deskripsi_manfaat',
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
        $this->db->order_by('id_manfaat', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_manfaat" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_manfaat = uniqid();
        // $this->tanggal = ;
        $this->deskripsi_manfaat = $post["deskripsi_manfaat"];
        $this->file_manfaat = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/manfaat/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
        $config['max_size']             = 60024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_manfaat')) {
            return $this->upload->data("file_name");
        }        
    }

    public function update() {
        $post = $this->input->post();

        $this->id_manfaat = $post["id"];
        $this->deskripsi_manfaat = $post["deskripsi_manfaat"];

        if (!empty($_FILES["file_manfaat"]["name"])) {
            $this->file_manfaat = $this->_uploadImage();
        }
        else
        {
            $this->file_manfaat = ["file_manfaat"];
        }

        $this->db->update($this->_table, $this, array('id_manfaat' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_manfaat" => $id));
    }
}