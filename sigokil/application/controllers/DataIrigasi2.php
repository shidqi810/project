<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataIrigasi2 extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('dataIrigasi2_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Rencana Pekerjaan Irigasi 2020*';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["datairigasi2"] = $this->dataIrigasi2_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("irigasi2/list2", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Rencana Pekerjaan Irigasi 2020*';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi2_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi2_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("irigasi2/new_form2");
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('DataIrigasi2');

        $data['title'] = 'Rencana Pekerjaan Irigasi 2020*';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi2_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi2_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datairigasi2"] = $this->dataIrigasi2_model->getById($id);

        if (!$data["datairigasi2"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("irigasi2/edit_form2", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataIrigasi2_model->delete($id)) {
            redirect(base_url('DataIrigasi2'));
        }
    }

    public function action(){

      $this->load->library("excel");

        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                     ->setLastModifiedBy('My Notes Code')
                     ->setTitle("Rencana Pekerjaan Irigasi 2020")
                     ->setSubject("Irigasi")
                     ->setDescription("Rencana Pekerjaan Irigasi 2020")
                     ->setKeywords("Rencana Pekerjaan Irigasi 2020");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
          'font' => array('bold' => true), // Set font nya jadi bold
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
          )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Rencana Pekerjaan Irigasi 2020"); // Set kolom A1 dengan tulisan "Rencana Pekerjaan Irigasi 2020"
        $excel->getActiveSheet()->mergeCells('A1:G1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        // Buat header tabel nya pada baris ke 3

        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Tanggal"); // Set kolom B3 dengan tulisan "Tanggal"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Program Kegiatan"); // Set kolom C3 dengan tulisan "Program Kegiatan"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "Lokasi"); // Set kolom D3 dengan tulisan "Lokasi"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Target Outcome"); // Set kolom E3 dengan tulisan "Target Outcome"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "Target Output"); // Set kolom E3 dengan tulisan "Target Output"
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Rencana Pagu"); // Set kolom E3 dengan tulisan "Rencana Pagu"

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);

        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $irigasi = $this->dataIrigasi2_model->getAll();

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4

        foreach($irigasi as $data){ // Lakukan looping pada variabel siswa
          if ($data->verifikasi2 == 1) {
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->tanggal2);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->program2);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->lokasi2);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->outcome2);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->output2);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->rencana_pagu);
            
            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
            
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
          }
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(25); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom E
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Rencana Pekerjaan Irigasi 2020");
        $excel->setActiveSheetIndex(0);

        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Rencana Pekerjaan Irigasi 2020.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }

}
