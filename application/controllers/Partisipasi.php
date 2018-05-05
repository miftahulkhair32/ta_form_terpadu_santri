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

    public function proses_input(){
        if($this->m_partisipasi->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Pelanggaran <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Pelanggaran <strong> GAGAL !! </strong> </div>');
            redirect('partisipasi');
        }
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Partisipasi';
        $isi['konten']      =   'partisipasi/tamp_cek-par';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Partisipasi';
        $isi['konten']      =   'partisipasi/tamp_get-par';
        $isi['data']        =   $this->m_partisipasi->get_data();
        $this->load->view('standar',$isi);
    }

    public function edit(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        $e = $this->db->get('partisipasi')->row_array();
        $isi['judul']       =   'Partisipasi';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'partisipasi/tamp_edi-par';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }
}