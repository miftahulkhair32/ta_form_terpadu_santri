<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keamanan extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function cek_login(){
        $username = $this->session->userdata('username');
        if (empty($username)){
            $this->session->sess_destroy();
            redirect('user');
        }
    }

    public function cek_santri(){
        if($this->session->userdata('status') == 'santri'){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Maaf Anda bukan Pengasuhan </div>');
            redirect('home');
        }
    }

}