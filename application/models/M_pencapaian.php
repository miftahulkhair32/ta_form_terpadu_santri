<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pencapaian extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $dataPencapaian = [
            'nama'      =>  $this->input->post('nama'),
            'bulan'     =>  $this->input->post('bulan'),
            'total'     =>  $this->input->post('total_nilai')
        ];
        $op = ['nama'=>$dataPencapaian['nama'],'bulan'=>$dataPencapaian['bulan']];
        if($this->db->get_where('pencapaian',$op)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Pencapaian Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Inputan Bulan Ini Hubungi Pengasuhan </div>');
            redirect('home');
        }
        return $this->db->insert('pencapaian',$dataPencapaian);
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['bulan'=>$dc,'status'=>'santri'];
        $this->db->select('pencapaian.id as id,user.nama as nama,pencapaian.bulan as bulan,pencapaian.total as total');
        $this->db->from('pencapaian');
        $this->db->join('user','user.nama = pencapaian.nama');
        $this->db->where($ty);
        $yu = $this->db->get();
        return $yu;
    }
}