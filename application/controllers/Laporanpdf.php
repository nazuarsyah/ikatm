<?php
Class laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','legal');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Image('./assets/images/logo_mms_web.png',11,12,40);
        $pdf->Cell(190,7,'Laporan Pengajuan Pembiayaan Online',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Ln();
        $pdf->Cell(21,6,'Tanggal',1,0);
        $pdf->Cell(35,6,'Nama',1,0);
        $pdf->Cell(65,6,'Alamat',1,0);
        $pdf->Cell(40,6,'Nama Usaha',1,0);
        $pdf->Cell(25,6,'Plafon',1,0);
        $pdf->Cell(40,6,'Nomor HP',1,1);


        $pdf->SetFont('Arial','',10);

        $pby = $this->db->get('pengajuan_pembiayaan')->result();
        foreach ($pby as $row){
            $pdf->Cell(21,6,$row->tgl_input,1,0);
            $pdf->Cell(35,6,$row->nama,1,0);
            $pdf->Cell(65,6,$row->alamat,1,0);
            $pdf->Cell(40,6,$row->usaha,1,0); 
            $pdf->Cell(25,6,number_format($row->plafon),1,0); 
            $pdf->Cell(40,6,$row->no_hp,1,1); 
        }

        $pdf->Output();
    }
}