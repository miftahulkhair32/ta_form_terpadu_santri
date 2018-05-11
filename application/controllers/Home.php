<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_home');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     => 'Home',
            'subjudul'  => 'Dashboard',
            'konten'    => 'konten',
            'tgl'       => mediumdate_indo(date('d-m-Y')),
            'san'       => $this->m_home->santri(),
            'men'       => $this->m_home->menej(),
            'total'     => $this->m_home->total()
        ];
        $this->load->view('standar',$isi);
    }
}
