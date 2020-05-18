<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus_model extends CI_Model
{
	private $_table = "halaman_topik";

	public function delete($id_hal) {
        return $this->db->delete($this->_table, array("id_hal" => $id_hal));
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

