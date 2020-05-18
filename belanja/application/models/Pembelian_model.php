<?php
class Pembelian_model extends CI_Model {
    private $_table = "pembelian";
    
    public $id_pembelian, $tanggal, $nama, $alamat, $pesanan, $quantitas, $harga, $penilaian, $bayar, $total, $stok;
    public $kategori, $berat, $kondisi, $komentar;

    public function rules() {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'pesanan',
            'label' => 'Pesanan',
            'rules' => 'required'],

            ['field' => 'quantitas',
            'label' => 'Quantitas',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'],

            ['field' => 'penilaian',
            'label' => 'Penilaian',
            'rules' => 'required']
        ];
    }

    public function rules2() {
        return [
            ['field' => 'pesanan',
            'label' => 'Pesanan',
            'rules' => 'required'],

            ['field' => 'stok',
            'label' => 'Stok',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required']
        ];
    }

    public function jumlah()
    {   
        $query = $this->db->get_where($this->_table, ["bayar" => 1]);
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function total()
    {
        $this->db->select_sum('total');
        $query = $this->db->get_where($this->_table, ["bayar" => 1]);
        if($query->num_rows()>0)
        {
            return $query->row()->total;
        }
        else
        {
            return 0;
        }
    }

    public function getAll() {
        $this->db->order_by('id_pembelian', 'DESC');
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id) {
        return $this->db->get_where($this->_table, ["id_pembelian" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();

        $this->id_pembelian = uniqid();
        // $this->tanggal = ;
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->pesanan = $post["pesanan"];
        $this->quantitas = $post["quantitas"];
        $this->harga = $post["harga"];
        $this->total = $this->quantitas * $this->harga;
        $this->penilaian = $post["penilaian"];
        $this->bayar = $post["bayar"];
        $this->stok = 0;

        $this->db->insert($this->_table, $this);
    }

    public function save2() {
        $post = $this->input->post();

        $this->id_pembelian = uniqid();
        // $this->tanggal = ;
        $this->nama = #;
        $this->alamat = #;
        $this->quantitas = 0;
        $this->quantitas = #;
        $this->pesanan = $post["pesanan"];
        $this->harga = $post["harga"];
        $this->total = 0;
        $this->stok = $post["stok"];
        $this->kategori = $post["kategori"];
        $this->berat = $post["berat"];
        $this->kondisi = $post["kondisi"];
        $this->penilaian = 0;
        $this->bayar = $post["bayar"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();

        $this->id_pembelian = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->pesanan = $post["pesanan"];
        $this->quantitas = $post["quantitas"];
        $this->stok = $post['stok'];
        $this->kategori = $post["kategori"];
        $this->berat = $post["berat"];
        $this->kondisi = $post["kondisi"];
        $this->harga = $post["harga"];
        $this->total = $this->quantitas * $this->harga;
        $this->penilaian = $post["penilaian"];
        $this->komentar = $post["komentar"];

        if(isset($_POST['bayar']) )
        {
            $this->bayar = $post["bayar"];
        }
        else
        {
           $this->bayar = 0;
        }

        $this->db->update($this->_table, $this, array('id_pembelian' => $post['id']));
    }

    public function delete($id) {
        return $this->db->delete($this->_table, array("id_pembelian" => $id));
    }
}