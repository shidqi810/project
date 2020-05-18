<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDataIrigasi extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->model('dataIrigasi_model');
        $this->load->library('form_validation');
    }


    public function index() {
        $data['title'] = 'Progress Pengerjaan 2019';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["datairigasi"] = $this->dataIrigasi_model->getAll();

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user_irigasi/list", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function add() {
        $data['title'] = 'Progress Pengerjaan 2019';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi_model->save();
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user_irigasi/new_form");
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);
    }


    public function edit($id = null) {
        if (!isset($id)) redirect('DataIrigasi');

        $data['title'] = 'Progress Pengerjaan 2019';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules($this->dataIrigasi_model->rules());

        if ($this->form_validation->run()) {
            $this->dataIrigasi_model->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datairigasi"] = $this->dataIrigasi_model->getById($id);

        if (!$data["datairigasi"]) show_404();
        
        $this->load->view("templates/header.php", $data);
        $this->load->view("templates/sidebar.php", $data);
        $this->load->view("templates/topbar.php", $data);
        $this->load->view("user_irigasi/edit_form", $data);
        $this->load->view("templates/footer.php", $data);

        $this->load->view("_partials/modal.php", $data);

        $this->load->view("_partials/js.php", $data);   
    }


    public function delete($id=null) {
        if (!isset($id)) show_404();
        
        if ($this->dataIrigasi_model->delete($id)) {
            redirect(base_url('UserDataIrigasi'));
        }
    }

    public function action(){

      $this->load->library("excel");

        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                     ->setLastModifiedBy('My Notes Code')
                     ->setTitle("Progress Pengerjaan Irigasi 2019")
                     ->setSubject("Irigasi")
                     ->setDescription("Progress Pengerjaan Irigasi 2019")
                     ->setKeywords("Progress Pengerjaan Irigasi 2019");
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

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Progress Pengerjaan 2019"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:M1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        // Buat header tabel nya pada baris ke 3

        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $excel->getActiveSheet()->mergeCells('A3:A4'); // Set Merge Cell pada kolom A3 sampai A4

        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Tanggal"); // Set kolom B3 dengan tulisan "Tanggal"
        $excel->getActiveSheet()->mergeCells('B3:B4'); // Set Merge Cell pada kolom B3 sampai B4

        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Program Kegiatan"); // Set kolom C3 dengan tulisan "Program Kegiatan"
        $excel->getActiveSheet()->mergeCells('C3:C4'); // Set Merge Cell pada kolom C3 sampai C4

        $excel->setActiveSheetIndex(0)->setCellValue('D3', "Lokasi"); // Set kolom D3 dengan tulisan "Lokasi"
        $excel->getActiveSheet()->mergeCells('D3:D4'); // Set Merge Cell pada kolom D3 sampai D4

        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Target Outcome"); // Set kolom E3 dengan tulisan "Target Outcome"
        $excel->getActiveSheet()->mergeCells('E3:E4'); // Set Merge Cell pada kolom E3 sampai E4

        $excel->setActiveSheetIndex(0)->setCellValue('F3', "Target Output"); // Set kolom E3 dengan tulisan "Target Output"
        $excel->getActiveSheet()->mergeCells('F3:F4'); // Set Merge Cell pada kolom F3 sampai F4

        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Pengadaan"); // Set kolom E3 dengan tulisan "Pengadaan"
        $excel->getActiveSheet()->mergeCells('G3:G4'); // Set Merge Cell pada kolom G3 sampai G4

        $excel->setActiveSheetIndex(0)->setCellValue('H3', "Pagu"); // Set kolom E3 dengan tulisan "Pagu"
        $excel->getActiveSheet()->mergeCells('H3:H4'); // Set Merge Cell pada kolom H3 sampai H4

        $excel->setActiveSheetIndex(0)->setCellValue('I3', "Nilai Kontrak"); // Set kolom E3 dengan tulisan "Nilai Kontrak"
        $excel->getActiveSheet()->mergeCells('I3:I4'); // Set Merge Cell pada kolom I3 sampai I4

        $excel->setActiveSheetIndex(0)->setCellValue('J3', "Realisasi"); // Set kolom E3 dengan tulisan "Realisasi"
        $excel->getActiveSheet()->mergeCells('J3:J4'); // Set Merge Cell pada kolom J3 sampai J4

        $excel->setActiveSheetIndex(0)->setCellValue('K3', "Progress"); // Set kolom E3 dengan tulisan "Progress"
        $excel->getActiveSheet()->mergeCells('K3:L3'); // Set Merge Cell pada kolom K3 sampai L3

        $excel->setActiveSheetIndex(0)->setCellValue('K4', "Keu"); // Set kolom E3 dengan tulisan "Keu"
        $excel->setActiveSheetIndex(0)->setCellValue('L4', "Fisik"); // Set kolom E3 dengan tulisan "Fisik"

        $excel->setActiveSheetIndex(0)->setCellValue('M3', "Total"); // Set kolom E3 dengan tulisan "Total"
        $excel->getActiveSheet()->mergeCells('M3:M4'); // Set Merge Cell pada kolom M3 sampai M4

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3:A4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3:D4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3:E4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3:F4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3:G4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3:H4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I3:I4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J3:J4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K3:K4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M3:M4')->applyFromArray($style_col);

        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $irigasi = $this->dataIrigasi_model->getAll();

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4

        foreach($irigasi as $data){ // Lakukan looping pada variabel siswa
          if ($data->verifikasi == 1) {
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->tanggal);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->program);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->lokasi);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->outcome);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->output);
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->pengadaan);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->pagu);
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->nilai_kontrak);
            $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->realisasi);
            $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->keu);
            $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->fisik);
            $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->total);
            
            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
            
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
          }
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(20); // Set width kolom E
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Progress Pengerjaan 2019");
        $excel->setActiveSheetIndex(0);

        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Progress Pengerjaan 2019.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
      }

}
