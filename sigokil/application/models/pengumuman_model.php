<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman_model extends CI_Model {
    private $_table = "dataadmin";
    
    public $id_admin;
    public $tanggal_admin;
    public $pengumuman;
    
    public function rules() {
        return [
            ['field' => 'pengumuman',
            'label' => 'Pengumuman',
            'rules' => 'required']
        ];
    }


    public function getAll() {
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_admin" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_admin = uniqid();
        // $this->tanggal = ;
        $this->pengumuman = $post["pengumuman"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();

        $this->id_admin = $post["id"];
        $this->pengumuman = $post["pengumuman"];

        $this->db->update($this->_table, $this, array('id_admin' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_admin" => $id));
    }
}