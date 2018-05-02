<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

    public function index(){
        $isi['judul']       =   'Laporan';
        $isi['subjudul']    =   'Form Terpadu';
        $isi['konten']      =   'laporan/tamp_laporan';
        $this->load->view('standar',$isi);
    }


}
