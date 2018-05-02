<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partisipasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_partisipasi');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     =>  'Form',
            'subjudul'  =>  'Partisipasi',
            'konten'    =>  'partisipasi/tamp_inp-par',
            'bulan'     =>  bulan_indo(date('d-m-Y', time()-60*60*24*5))
        ];
        $this->load->view('standar',$isi);
    }
}