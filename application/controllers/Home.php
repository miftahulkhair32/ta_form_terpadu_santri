<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_user');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     => 'Home',
            'subjudul'  => 'Dashboard',
            'konten'    => 'konten'
        ];
        $this->load->view('standar',$isi);
    }
}
