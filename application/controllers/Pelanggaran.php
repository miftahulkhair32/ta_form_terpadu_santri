<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('keamanan');
        $this->load->model('m_pelanggaran');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi['judul']       =   'Form';
        $isi['subjudul']    =   'Pelanggaran';
        $isi['konten']      =   'pelanggaran/tamp_inp-pel';
        $isi['bulan']       =   bulan_indo(date('d-m-Y', time()-60*60*24*5));
		$this->load->view('standar',$isi);
    }
    

    public function proses_input(){
        if($this->m_pelanggaran->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Pelanggaran <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Pelanggaran <strong> GAGAL !! </strong> </div>');
            redirect('pelanggaran');
        } 
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pelanggaran';
        $isi['konten']      =   'pelanggaran/tamp_cek-pel';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pelanggaran';
        $isi['konten']      =   'pelanggaran/tamp_get-pel';
        $isi['data']        =   $this->m_pelanggaran->get_data();
        $this->load->view('standar',$isi);
    }

    public function edit(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        $e = $this->db->get('pelanggaran')->row_array();
        $isi['judul']       =   'Pelanggaran';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'pelanggaran/tamp_edi-pel';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }

    public function proses_edit(){
        $this->keamanan->cek_santri();
        if($this->m_pelanggaran->edit() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit Pelanggaran <strong> GAGAL !! </strong></div>');
            redirect('pelanggaran/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit Pelanggaran <strong> SUKSES !!</strong></div>');
            redirect('pelanggaran/cek');
        }
    }

    public function hapus(){
        $this->keamanan->cek_santri();
        if($this->m_pelanggaran->hapus() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Hapus Pelanggaran <strong> GAGAL !! </strong></div>');
            redirect('pelanggaran/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Hapus Pelanggaran <strong> SUKSES !!</strong></div>');
            redirect('pelanggaran/cek');
        }
    }

}