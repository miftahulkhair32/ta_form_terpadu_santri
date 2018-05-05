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
        $ty = ['tahfizh.bulan'=>$dc];
        $this->db->select('*');
        $this->db->from('tahfizh');
        $this->db->where($ty);
        $t = $this->db->get();
        return $t;
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
}