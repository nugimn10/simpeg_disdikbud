<?php

class Data_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 'Administrator') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Data Pegawai',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_pegawai', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Tambah Data Pegawai',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_pegawai');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {
            $nip        = $this->input->post('nip');
            $nik        = $this->input->post('nik');
            $nuptk      = $this->input->post('nuptk');
            $nm_pegawai = $this->input->post('nm_pegawai');
            $jk         = $this->input->post('jk');
            $tpt_lhr    = $this->input->post('tpt_lhr');
            $tgl_lhr    = $this->input->post('tgl_lhr');
            $agama      = $this->input->post('agama');
            $gol_darah  = $this->input->post('gol_darah');
            $stts_pnkh  = $this->input->post('stts_pnkh');
            $stts_kpgw  = $this->input->post('stts_kpgw');
            $no_hp      = $this->input->post('no_hp');
            $email      = $this->input->post('email');
            $alamat     = $this->input->post('alamat');
            $tgl_msk    = $this->input->post('tgl_msk');
            $tgl_knk_pkt = $this->input->post('tgl_knk_pkt');
            $tgl_knk_gj = $this->input->post('tgl_knk_gj');
            // $foto = $_FILES['foto'];
            // if ($foto = '') { } else {
            //     $config['upload_path'] = './upload';
            //     $config['allowed_types'] = 'jpg|png|gif';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('foto')) {
            //         echo "Upload Gagal";
            //         die();
            //     } else {
            //         $foto = $this->upload->data('file_name');
            //     }
            // }

            $data = [
                'nip'        => $nip,
                'nik'        => $nik,
                'nuptk'        => $nuptk,
                'nm_pegawai' => $nm_pegawai,
                'jk'         => $jk,
                'tpt_lhr'    => $tpt_lhr,
                'tgl_lhr'    => $tgl_lhr,
                'agama'      => $agama,
                'gol_darah'   => $gol_darah,
                'stts_pnkh'   => $stts_pnkh,
                'stts_kpgw'   => $stts_kpgw,
                'no_hp'      => $no_hp,
                'email'      => $email,
                'alamat'     => $alamat,
                'tgl_msk'    => $tgl_msk,
                'tgl_knk_pkt' => $tgl_knk_pkt,
                'tgl_knk_gj'  => $tgl_knk_gj
                // 'foto'       => $foto
            ];

            $this->model_pegawai->tambah_pegawai($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/data_pegawai');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Edit Data Pegawai',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'pegawai' => $this->model_pegawai->tampil_by_id($id),
                'jenkel' => ['Laki-laki', 'Perempuan'],
                'agama' => ['Islam', 'Katolik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Kong Hu Cu'],
                'gol_darah' => ['-', 'A', 'AB', 'B', 'O'],
                'stts_pnkh' => ['Menikah', 'Belum Menikah', 'Cerai'],
                'stts_kpgw' => ['PNS', 'Non PNS', 'PPPK']
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_pegawai', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {
            $nip        = $this->input->post('nip');
            $nik        = $this->input->post('nik');
            $nuptk      = $this->input->post('nuptk');
            $nm_pegawai = $this->input->post('nm_pegawai');
            $jk         = $this->input->post('jk');
            $noserdik   = $this->input->post('noserdik');
            $nokarpeg   = $this->input->post('nokarpeg');
            $uk         = $this->input->post('uk');
            $kec        = $this->input->post('kec');
            $tpt_lhr    = $this->input->post('tpt_lhr');
            $tgl_lhr    = $this->input->post('tgl_lhr');
            $agama      = $this->input->post('agama');
            $gol_darah  = $this->input->post('gol_darah');
            $stts_pnkh  = $this->input->post('stts_pnkh');
            $stts_kpgw  = $this->input->post('stts_kpgw');
            $no_hp      = $this->input->post('no_hp');
            $email      = $this->input->post('email');
            $alamat     = $this->input->post('alamat');
            $tgl_msk    = $this->input->post('tgl_msk');
            $tgl_knk_pkt = $this->input->post('tgl_knk_pkt');
            $tgl_knk_gj = $this->input->post('tgl_knk_gj');

            // $foto_lama = $this->input->post('foto_lama');

            // $foto = $_FILES['foto'];
            // if ($foto = '') {
            //     $foto = $foto_lama;
            // } else {

            //     if (file_exists('./upload/' . $foto_lama)) {
            //         unlink('./upload/' . $foto_lama);
            //     }


            //     $config['upload_path'] = './upload';
            //     $config['allowed_types'] = 'jpg|png|gif';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('foto')) {
            //         echo "Upload Gagal";
            //         die();
            //     } else {
            //         $foto = $this->upload->data('file_name');
            //     }
            // }

            $data = [
                'nip'        => $nip,
                'nik'        => $nik,
                'nuptk'      => $nuptk,
                'nm_pegawai' => $nm_pegawai,
                'jk'         => $jk,
                'uk'         => $uk,
                'noserdik'   => $noserdik,
                'nokarpeg'   => $nokarpeg,
                'kec'        => $kec,
                'tpt_lhr'    => $tpt_lhr,
                'tgl_lhr'    => $tgl_lhr,
                'agama'      => $agama,
                'gol_darah'   => $gol_darah,
                'stts_pnkh'   => $stts_pnkh,
                'stts_kpgw'   => $stts_kpgw,
                'no_hp'      => $no_hp,
                'email'      => $email,
                'alamat'     => $alamat,
                'tgl_msk'    => $tgl_msk,
                'tgl_knk_pkt' => $tgl_knk_pkt,
                'tgl_knk_gj'  => $tgl_knk_gj
                // 'foto'       => $foto
            ];

            $this->model_pegawai->edit_pegawai($data);
            $this->session->set_flashdata('message', 'Diubah');
            redirect('admin/data_pegawai');
        }
    }

    public function hapus($id)
    {
        $this->model_pegawai->hapus_pegawai($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/data_pegawai');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Halaman Detail Pegawai',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'suami_istri' => $this->model_suami_istri->tampil_by_id_pegawai($id),
            'anak' => $this->model_anak->tampil_by_id_pegawai($id),
            'orangtua' => $this->model_orangtua->tampil_by_id_pegawai($id),
            'bahasa' => $this->model_bahasa->tampil_by_id_pegawai($id),
            'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id),
            'me' => $this->model_master_eselon->tampil_semua(),
            'mj' => $this->model_master_jabatan->tampil_semua(),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'berkas' => $this->model_master_berkas->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_pegawai', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function export(){
    
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
      
        $excel = new PHPExcel();
        
        $excel->getProperties()->setCreator('Dinas Pendidikan Kab.Lebak')
                     ->setLastModifiedBy('Dinas Pendidikan Kab. Lebak')
                     ->setTitle("Data Pegawai")
                     ->setSubject("Pegawai")
                     ->setDescription("Laporan Semua Data Pegawai")
                     ->setKeywords("Data Pegawai");
        
        $style_col = array(
          'font' => array('bold' => true), 
          'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
          )
        );
        
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER 
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), 
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) 
          )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PEGAWAI DINAS PENDIDIKAN KAB. LEBAK"); 
        $excel->getActiveSheet()->mergeCells('A1:J1'); 
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); 
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); 
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); 
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "NIP"); 
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "NUPTK"); 
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA"); 
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "JK");
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "JENIS GURU"); 
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "UNIT KERJA"); 
        $excel->setActiveSheetIndex(0)->setCellValue('H3', "KEC"); 
        $excel->setActiveSheetIndex(0)->setCellValue('I3', "NO SERDIK"); 
        $excel->setActiveSheetIndex(0)->setCellValue('J3', "NO KARPEG");
        $excel->setActiveSheetIndex(0)->setCellValue('K3', "TPT LAHIR"); 
        $excel->setActiveSheetIndex(0)->setCellValue('L3', "ALAMAT"); 
        $excel->setActiveSheetIndex(0)->setCellValue('M3', "TGL KNK PKT"); 
        $excel->setActiveSheetIndex(0)->setCellValue('N3', "TGL KNK GJ"); 
        $excel->setActiveSheetIndex(0)->setCellValue('O3', "JABATAN");
        $excel->setActiveSheetIndex(0)->setCellValue('P3', "GOLONGAN"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Q3', "PANGKAT"); 
        $excel->setActiveSheetIndex(0)->setCellValue('Q3', "PENDIDIKAN");
        $excel->setActiveSheetIndex(0)->setCellValue('R3', "THN PENSIUN");
        
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
        
        $pegawai = $this->model_pegawai->tampil_semua();
        $no = 1; 
        $numrow = 4; 
        foreach($pegawai as $data){ 
          $jabatan = $this->model_jabatan->tampil_by_id_pegawai($data->id_pegawai);
          $pangkat = $this->model_pangkat->tampil_by_id_pegawai($data->id_pegawai);
          $sekolah = $this->model_sekolah->tampil_by_id_pegawai($data->id_pegawai);
          foreach($jabatan as $jb)
          {

          }
          foreach($pangkat as $pkt)
          {

          }
          foreach($sekolah as $sklh)
          {

          }
          $knkpkt = date('d-m-Y',strtotime($data->tgl_knk_pkt.'+ 4 years'));
          $knkgj = date('d-m-Y',strtotime($data->tgl_knk_gj.'+ 2 years'));
          if ($jb->jns_jabatan == "FUNGSIONAL UMUM"||$jb->jns_jabatan == "STRUKTURAL" ) { $pensiun = date('d-m-Y', strtotime($data->tgl_lhr.'+ 58 years')); } 
          else if ($jb->jns_jabatan == "FUNGSIONAL TERTENTU"){ $pensiun = date('d-m-Y', strtotime($data->tgl_lhr.'+ 60 years'));}

          $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
          $excel->getActiveSheet()->getCell('B'.$numrow)->setValueExplicit($data->nip, PHPExcel_Cell_DataType::TYPE_STRING);;
          // $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nip);
          $excel->getActiveSheet()->getCell('C'.$numrow)->setValueExplicit($data->nuptk, PHPExcel_Cell_DataType::TYPE_STRING);;
          // $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nuptk);
          $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nm_pegawai);
          $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->jk);
          $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jg);
          $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->uk);
          $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->kec);
          $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->noserdik);
          $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->nokarpeg);
          $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->tpt_lhr);
          $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->alamat);
          $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $knkpkt);
          $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $knkgj);
          $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $jb->nm_jabatan);
          // $excel->getActiveSheet()->getCell('c'.$numrow)->setValueExplicit($jb->nm_jabatan, PHPExcel_Cell_DataType::TYPE_STRING);;
          $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $pkt->golongan);
          $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $sklh->tingkat);
          $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $pensiun);
          
          
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
          $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
          $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
          
          $no++; 
          $numrow++; 
        }
        
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); 
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); 
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); 
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20); 
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30); 
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); 
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(15); 
        
        
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        
        $excel->getActiveSheet(0)->setTitle("Laporan Data Pegawai");
        $excel->setActiveSheetIndex(0);
        
        $filename="Data_Pegawai_".date('d-m-Y').".xls";
        $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
        ob_end_clean();
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename='.$filename);
        $objWriter->save('php://output');
      }
    
}
