<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hapalan extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $dataHapalan = [
            'nama'      =>  $this->input->post('nama'),
            'bulan'     =>  $this->input->post('bulan'),
            'halaman'   =>  $this->input->post('halam'),
            'total'     =>  $this->input->post('total'),
            'tgl1'      =>  $this->input->post('tgl1'),
            'salah1'    =>  $this->input->post('kesalahan1'),
            'lancar1'   =>  $this->input->post('kelancaran1'),
            'makna1'    =>  $this->input->post('makna1'),
            'tgl2'      =>  $this->input->post('tgl2'),
            'salah2'    =>  $this->input->post('kesalahan2'),
            'lancar2'   =>  $this->input->post('kelancaran2'),
            'makna2'    =>  $this->input->post('makna2'),
            'tgl3'      =>  $this->input->post('tgl3'),
            'salah3'    =>  $this->input->post('kesalahan3'),
            'lancar3'   =>  $this->input->post('kelancaran3'),
            'makna3'    =>  $this->input->post('makna3'),
            'tgl4'      =>  $this->input->post('tgl4'),
            'salah4'    =>  $this->input->post('kesalahan4'),
            'lancar4'   =>  $this->input->post('kelancaran4'),
            'makna4'    =>  $this->input->post('makna4'),
            'tgl5'      =>  $this->input->post('tgl5'),
            'salah5'    =>  $this->input->post('kesalahan5'),
            'lancar5'   =>  $this->input->post('kelancaran5'),
            'makna5'    =>  $this->input->post('makna5'),
            'tgl6'      =>  $this->input->post('tgl6'),
            'salah6'    =>  $this->input->post('kesalahan6'),
            'lancar6'   =>  $this->input->post('kelancaran6'),
            'makna6'    =>  $this->input->post('makna6'),
            'tgl7'      =>  $this->input->post('tgl7'),
            'salah7'    =>  $this->input->post('kesalahan7'),
            'lancar7'   =>  $this->input->post('kelancaran7'),
            'makna7'    =>  $this->input->post('makna7'),
            'tgl8'      =>  $this->input->post('tgl8'),
            'salah8'    =>  $this->input->post('kesalahan8'),
            'lancar8'   =>  $this->input->post('kelancaran8'),
            'makna8'    =>  $this->input->post('makna8'),
            'tgl9'      =>  $this->input->post('tgl9'),
            'salah9'    =>  $this->input->post('kesalahan9'),
            'lancar9'   =>  $this->input->post('kelancaran9'),
            'makna9'    =>  $this->input->post('makna9'),
        ];
        $op = ['nama'=>$dataHapalan['nama'],'bulan'=>$dataHapalan['bulan']];
        if($this->db->get_where('tahfizh',$op)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Tahfizh Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Inputan Bulan Ini Hubungi Pengasuhan </div>');
            redirect('home');
        } else {
            return $this->db->insert('tahfizh',$dataHapalan);
        }
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['tahfizh.bulan'=>$dc,'status'=>'santri'];
        $this->db->select('tahfizh.id,user.nama,tahfizh.bulan,tahfizh.halaman,tahfizh.tgl1,tahfizh.tgl2,tahfizh.tgl3,tahfizh.tgl4,tahfizh.tgl5,tahfizh.tgl6,tahfizh.tgl7,tahfizh.tgl8,tahfizh.tgl9,tahfizh.total,tahfizh.salah1,tahfizh.salah2,tahfizh.salah3,tahfizh.salah4,tahfizh.salah5,tahfizh.salah6,tahfizh.salah7,tahfizh.salah8,tahfizh.salah9,tahfizh.lancar1,tahfizh.lancar2,tahfizh.lancar3,tahfizh.lancar4,tahfizh.lancar5,tahfizh.lancar6,tahfizh.lancar7,tahfizh.lancar8,tahfizh.lancar9,tahfizh.makna1,tahfizh.makna2,tahfizh.makna3,tahfizh.makna4,tahfizh.makna5,tahfizh.makna6,tahfizh.makna7,tahfizh.makna8,tahfizh.makna9');
        $this->db->from('user');
        $this->db->join('tahfizh','user.nama = tahfizh.nama','left');
        $this->db->where($ty);
        return $this->db->get();
    }

    public function edit(){
        $id = $this->input->post('id');
        $dataHapalan = [
            'halaman'   =>  $this->input->post('halam'),
            'total'     =>  $this->input->post('total'),
            'tgl1'      =>  $this->input->post('tgl1'),
            'salah1'    =>  $this->input->post('kesalahan1'),
            'lancar1'   =>  $this->input->post('kelancaran1'),
            'makna1'    =>  $this->input->post('makna1'),
            'tgl2'      =>  $this->input->post('tgl2'),
            'salah2'    =>  $this->input->post('kesalahan2'),
            'lancar2'   =>  $this->input->post('kelancaran2'),
            'makna2'    =>  $this->input->post('makna2'),
            'tgl3'      =>  $this->input->post('tgl3'),
            'salah3'    =>  $this->input->post('kesalahan3'),
            'lancar3'   =>  $this->input->post('kelancaran3'),
            'makna3'    =>  $this->input->post('makna3'),
            'tgl4'      =>  $this->input->post('tgl4'),
            'salah4'    =>  $this->input->post('kesalahan4'),
            'lancar4'   =>  $this->input->post('kelancaran4'),
            'makna4'    =>  $this->input->post('makna4'),
            'tgl5'      =>  $this->input->post('tgl5'),
            'salah5'    =>  $this->input->post('kesalahan5'),
            'lancar5'   =>  $this->input->post('kelancaran5'),
            'makna5'    =>  $this->input->post('makna5'),
            'tgl6'      =>  $this->input->post('tgl6'),
            'salah6'    =>  $this->input->post('kesalahan6'),
            'lancar6'   =>  $this->input->post('kelancaran6'),
            'makna6'    =>  $this->input->post('makna6'),
            'tgl7'      =>  $this->input->post('tgl7'),
            'salah7'    =>  $this->input->post('kesalahan7'),
            'lancar7'   =>  $this->input->post('kelancaran7'),
            'makna7'    =>  $this->input->post('makna7'),
            'tgl8'      =>  $this->input->post('tgl8'),
            'salah8'    =>  $this->input->post('kesalahan8'),
            'lancar8'   =>  $this->input->post('kelancaran8'),
            'makna8'    =>  $this->input->post('makna8'),
            'tgl9'      =>  $this->input->post('tgl9'),
            'salah9'    =>  $this->input->post('kesalahan9'),
            'lancar9'   =>  $this->input->post('kelancaran9'),
            'makna9'    =>  $this->input->post('makna9'),
        ];
        $this->db->where('id',$id);
        return $this->db->update('tahfizh',$dataHapalan);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('tahfizh');
    }
}