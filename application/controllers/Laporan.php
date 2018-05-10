<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->library('pdf');
        $this->load->model('m_laporan');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

    public function index(){
        $isi['judul']       =   'Laporan';
        $isi['subjudul']    =   'Form Terpadu';
        $isi['konten']      =   'laporan/tamp_laporan';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Laporan';
        $isi['konten']      =   'laporan/tamp_get-lap';
        $isi['mene']        =   $this->m_laporan->menej();
        $isi['data']        =   $this->m_laporan->get();
        $this->load->view('standar',$isi);
    }

    public function pdf(){
        $this->load->view('laporan/pdf');
    }

}
