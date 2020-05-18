<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataIrigasi_model extends CI_Model {
    private $_table = "datairigasi";
    
    public $id_dataIrigasi;
    public $tanggal;
    public $program;
    public $lokasi;
    public $lokasi_file;
    public $outcome;
    public $output;
    public $pengadaan;
    public $pagu;
    public $nilai_kontrak;
    public $realisasi;
    public $keu;
    public $fisik;
    public $total;
    public $verifikasi;


    public function rules() {
        return [
            ['field' => 'program',
            'label' => 'Program',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'Lokasi',
            'rules' => 'required'],

            ['field' => 'outcome',
            'label' => 'Outcome',
            'rules' => 'required'],

            ['field' => 'output',
            'label' => 'Output',
            'rules' => 'required'],

            ['field' => 'pengadaan',
            'label' => 'Pengadaan',
            'rules' => 'required'],

            ['field' => 'pagu',
            'label' => 'Pagu',
            'rules' => 'required'],

            ['field' => 'nilai_kontrak',
            'label' => 'Nilai Kontrak',
            'rules' => 'required'],

            ['field' => 'realisasi',
            'label' => 'Realisasi',
            'rules' => 'required'],
            
            ['field' => 'keu',
            'label' => 'Keu',
            'rules' => 'required'],

            ['field' => 'fisik',
            'label' => 'Fisik',
            'rules' => 'required'],

            ['field' => 'total',
            'label' => 'Total',
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
        $this->db->order_by('id_dataIrigasi', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_dataIrigasi" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();

        $this->id_dataIrigasi = uniqid();
        // $this->tanggal = ;
        $this->program = $post["program"];
        $this->lokasi = $post["lokasi"];

        if (!empty($_FILES["lokasi_file"]["name"])) {
            $this->lokasi_file = $this->_uploadImage();
        }
        else
        {
            $this->lokasi_file = "#";
        }
        
        $this->outcome = $post["outcome"];
        $this->output = $post["output"];
        $this->pengadaan = $post["pengadaan"];
        $this->pagu = $post["pagu"];
        $this->nilai_kontrak = $post["nilai_kontrak"];
        $this->realisasi = $post["realisasi"];
        $this->keu = $post["keu"];
        $this->fisik = $post["fisik"];
        $this->total = $post["total"];
        $this->verifikasi = $post["verifikasi"];

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/irigasi2019/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx|xlsx|ppt|pptx|xls|rar|zip';
        $config['max_size']             = 60024; // 60MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('lokasi_file')) {
            return $this->upload->data("file_name");
        }        
    }

    public function update() {
        $post = $this->input->post();

        $this->id_dataIrigasi = $post["id"];
        $this->program = $post["program"];
        $this->lokasi = $post["lokasi"];

        if (!empty($_FILES["lokasi_file"]["name"])) {
            $this->lokasi_file = $this->_uploadImage();
        }
        else
        {
            $this->lokasi_file = ["lokasi_file"];
        }

        $this->outcome = $post["outcome"];
        $this->output = $post["output"];
        $this->pengadaan = $post["pengadaan"];
        $this->pagu = $post["pagu"];
        $this->nilai_kontrak = $post["nilai_kontrak"];
        $this->realisasi = $post["realisasi"];
        $this->keu = $post["keu"];
        $this->fisik = $post["fisik"];
        $this->total = $post["total"];

        if(isset($_POST['verifikasi']) )
        {
            $this->verifikasi = $post["verifikasi"];
        }
        else
        {
           $this->verifikasi = 0;
        }

        $this->db->update($this->_table, $this, array('id_dataIrigasi' => $post['id']));
    }


    public function delete($id) {
        return $this->db->delete($this->_table, array("id_dataIrigasi" => $id));
    }
}