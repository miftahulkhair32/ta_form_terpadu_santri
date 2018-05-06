<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_partisipasi extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $data = [
            'nama'          =>  $this->input->post('nama'),
            'bulan'         =>  $this->input->post('bulan'),
            'hadir1'        =>  $this->input->post('hadir1'),
            'lambat1'       =>  $this->input->post('lambat1'),
            'tidak1'        =>  $this->input->post('tidak1'),
            'kurang1'       =>  $this->input->post('kurang1'),
            'hadir2'        =>  $this->input->post('hadir2'),
            'lambat2'       =>  $this->input->post('lambat2'),
            'tidak2'        =>  $this->input->post('tidak2'),
            'kurang2'       =>  $this->input->post('kurang2'),
            'hadir3'        =>  $this->input->post('hadir3'),
            'lambat3'       =>  $this->input->post('lambat3'),
            'tidak3'        =>  $this->input->post('tidak3'),
            'kurang3'       =>  $this->input->post('kurang3'),
            'hadir4'        =>  $this->input->post('hadir4'),
            'lambat4'       =>  $this->input->post('lambat4'),
            'tidak4'        =>  $this->input->post('tidak4'),
            'kurang4'       =>  $this->input->post('kurang4'),
            'keterangan'    =>  $this->input->post('keterangan'),
            'total'         =>  $this->input->post('total')
        ];
        $cek = ['nama'=>$data['nama'],'bulan'=>$data['bulan']];
        if($this->db->get_where('partisipasi',$cek)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Partisipasi Program Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Inputan Bulan Ini Hubungi Pengasuhan </div>');
            redirect('home');
        }
        return $this->db->insert('partisipasi',$data);
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['bulan'=>$dc,'status'=>'santri'];
        $this->db->select('partisipasi.id as id,user.nama as nama,partisipasi.bulan as bulan,partisipasi.total,partisipasi.lambat1,partisipasi.lambat2,partisipasi.lambat3,partisipasi.lambat4,partisipasi.tidak1,partisipasi.tidak2,partisipasi.tidak3,partisipasi.tidak4,partisipasi.kurang1,partisipasi.kurang2,partisipasi.kurang3,partisipasi.kurang4,partisipasi.keterangan');
        $this->db->from('user');
        $this->db->join('partisipasi','user.nama = partisipasi.nama','left');
        $this->db->where($ty);
        return $this->db->get();
    }

    public function edit(){
        $id  = $this->input->post('id');
        $dat = [
            'hadir1'        =>  $this->input->post('hadir1'),
            'lambat1'       =>  $this->input->post('lambat1'),
            'tidak1'        =>  $this->input->post('tidak1'),
            'kurang1'       =>  $this->input->post('kurang1'),
            'hadir2'        =>  $this->input->post('hadir2'),
            'lambat2'       =>  $this->input->post('lambat2'),
            'tidak2'        =>  $this->input->post('tidak2'),
            'kurang2'       =>  $this->input->post('kurang2'),
            'hadir3'        =>  $this->input->post('hadir3'),
            'lambat3'       =>  $this->input->post('lambat3'),
            'tidak3'        =>  $this->input->post('tidak3'),
            'kurang3'       =>  $this->input->post('kurang3'),
            'hadir4'        =>  $this->input->post('hadir4'),
            'lambat4'       =>  $this->input->post('lambat4'),
            'tidak4'        =>  $this->input->post('tidak4'),
            'kurang4'       =>  $this->input->post('kurang4'),
            'keterangan'    =>  $this->input->post('keterangan'),
            'total'         =>  $this->input->post('total')
        ];
        $this->db->where('id',$id);
        return $this->db->update('partisipasi',$dat);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('partisipasi');
    }

}