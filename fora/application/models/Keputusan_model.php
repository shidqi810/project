<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keputusan_model extends CI_Model {
    private $_table = "keputusan";
    
    public $id_keputusan;
    public $tanggal;
    public $keterangan;
    public $catatan;


    public function rules() {
        return [
            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
            
            ['field' => 'catatan',
            'label' => 'Catatan',
            'rules' => 'required']
        ];
    }


    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_keputusan" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_keputusan = uniqid();
        // $this->tanggal = ;
        $this->keterangan = $post["keterangan"];
        $this->catatan = $post["catatan"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();

        $this->id_keputusan = $post["id"];
        $this->keterangan = $post["keterangan"];
        $this->catatan = $post["catatan"];

        $this->db->update($this->_table, $this, array('id_keputusan' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_keputusan" => $id));
    }
}