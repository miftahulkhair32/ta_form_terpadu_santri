<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggaran extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $this->load->helper('pelanggaran');
        $inpPelangg = pelanggaran($this->input->post());
        $dataPelanggaran = [
            'nama'          =>  $this->input->post('nama'),
            'bulan'         =>  $this->input->post('bulan'),
            'total'         =>  $this->input->post('total_bulan'),
            'keterangan'    =>  $this->input->post('keterangan'),
            'pelanggaran'   =>  $inpPelangg
        ];
        $op = ['nama'=>$dataPelanggaran['nama'],'bulan'=>$dataPelanggaran['bulan']];
        if($this->db->get_where('pelanggaran',$op)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Pelanggaran Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Inputan Bulan Ini Hubungi Pengasuhan </div>');
            redirect('home');
        } else {
            return $this->db->insert('pelanggaran',$dataPelanggaran);
        }
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['bulan'=>$dc,'status'=>'santri'];
        $this->db->select('pelanggaran.id as id,pelanggaran.bulan as bulan,user.nama as nama,pelanggaran.pelanggaran as pelanggaran,pelanggaran.total as total,pelanggaran.keterangan as keterangan');
        $this->db->from('pelanggaran');
        $this->db->join('user','user.nama = pelanggaran.nama');
        $this->db->where($ty);
        $yu = $this->db->get();
        return $yu;
    }

    public function edit(){
        $id  = $this->input->post('id');
        $dat = [
            'total'         =>  $this->input->post('total'),
            'pelanggaran'   =>  $this->input->post('pelanggaran'),
            'keterangan'    =>  $this->input->post('keterangan')
        ];
        $this->db->where('id',$id);
        return $this->db->update('pelanggaran',$dat);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('pelanggaran');
    }
}