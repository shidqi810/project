<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_model extends CI_Model {
    private $_table = "keuangan";
    
    public $id_keuangan;
    public $tanggal;
    public $jenis;
    public $nominal;
    public $keterangan;
    public $total;

    public function rules() {
        return [
            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
            
            ['field' => 'nominal',
            'label' => 'Nominal Uang',
            'rules' => 'required']
        ];
    }


    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
    

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_keuangan" => $id])->row();
    }


    public function save() {
        $post = $this->input->post();

        $this->id_keuangan = uniqid();
        // $this->tanggal = ;
        $this->nominal = $post["nominal"];
        $this->jenis = $post["jenis"];
        $this->keterangan = $post["keterangan"];

        $query = $this->db->query('SELECT total FROM keuangan ORDER BY tanggal DESC LIMIT 1');
        $row = $query->row_array();

        if ($post["jenis"] == "pemasukan") {
            $this->total = $row['total'] + $this->nominal;
        }
        else {
            $this->total = $row['total'] - $this->nominal;
        }

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();

        $this->id_keuangan = $post["id"];
        $this->jenis = $post["jenis"];
        $this->keterangan = $post["keterangan"];
        $this->nominal = $post["nominal"];

        if ($post["jenis"] == "pemasukan") {

            $this->total;
        }

        $this->db->update($this->_table, $this, array('id_keuangan' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_keuangan" => $id));
    }
}
