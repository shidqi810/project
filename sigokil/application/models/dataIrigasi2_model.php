<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataIrigasi2_model extends CI_Model {
    private $_table = "datairigasi2";
    
    public $id_dataIrigasi2;
    public $tanggal2;
    public $program2;
    public $lokasi2;
    public $lokasi_file2;
    public $outcome2;
    public $output2;
    public $rencana_pagu;
    public $verifikasi2;


    public function rules() {
        return [
            ['field' => 'program2',
            'label' => 'Program',
            'rules' => 'required'],

            ['field' => 'lokasi2',
            'label' => 'Lokasi',
            'rules' => 'required'],

            ['field' => 'outcome2',
            'label' => 'Outcome',
            'rules' => 'required'],

            ['field' => 'output2',
            'label' => 'Output',
            'rules' => 'required'],

            ['field' => 'rencana_pagu',
            'label' => 'Rencana Pagu',
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
        $this->db->order_by('id_dataIrigasi2', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_dataIrigasi2" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();

        $this->id_dataIrigasi2 = uniqid();
        // $this->tanggal = ;
        $this->program2 = $post["program2"];
        $this->lokasi2 = $post["lokasi2"];

        if (!empty($_FILES["lokasi_file2"]["name"])) {
            $this->lokasi_file2 = $this->_uploadImage();
        }
        else
        {
            $this->lokasi_file2 = "#";
        }
        
        $this->outcome2 = $post["outcome2"];
        $this->output2 = $post["output2"];
        $this->rencana_pagu = $post["rencana_pagu"];
        $this->verifikasi2 = $post["verifikasi2"];

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/irigasi2020/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
        $config['max_size']             = 60024; // 60MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lokasi_file2')) {
            return $this->upload->data("file_name");
        }        
    }

    public function update() {
        $post = $this->input->post();

        $this->id_dataIrigasi2 = $post["id"];
        $this->program2 = $post["program2"];
        $this->lokasi2 = $post["lokasi2"];

        if (!empty($_FILES["lokasi_file2"]["name"])) {
            $this->lokasi_file2 = $this->_uploadImage();
        }
        else
        {
            $this->lokasi_file2 = ["lokasi_file2"];
        }

        $this->outcome2 = $post["outcome2"];
        $this->output2 = $post["output2"];
        $this->rencana_pagu = $post["rencana_pagu"];

        if(isset($_POST['verifikasi2']) )
        {
            $this->verifikasi2 = $post["verifikasi2"];
        }
        else
        {
           $this->verifikasi2 = 0;
        }

        $this->db->update($this->_table, $this, array('id_dataIrigasi2' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_dataIrigasi2" => $id));
    }
}