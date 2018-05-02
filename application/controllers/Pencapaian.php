<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencapaian extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('keamanan');
        $this->load->model('m_pencapaian');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     => 'Form',
            'subjudul'  => 'Pencapaian Target Santri',
            'konten'    => 'pencapaian/tamp_inp-pen',
            'bulan'     =>  bulan_indo(date('d-m-Y', time()-60*60*24*5))
        ];
        $this->load->view('standar',$isi);
    }

    public function proses_input(){
        if($this->m_pencapaian->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Pencapaian <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Pencapaian <strong> GAGAL !! </strong> </div>');
            redirect('pencapaian');
        }
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pencapaian';
        $isi['konten']      =   'pencapaian/tamp_cek-pen';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pencapaian';
        $isi['konten']      =   'pencapaian/tamp_get-pen';
        $isi['data']        =   $this->m_pencapaian->get_data();
        $this->load->view('standar',$isi);
    }
}
