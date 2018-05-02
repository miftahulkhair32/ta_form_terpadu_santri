<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $con['upload_path']      =   './artikel/';
        $con['allowed_types']    =   'zip|rar|docx|ods|odt|pdf';
        $con['encrypt_name']     =   TRUE;
        $this->upload->initialize($con);
        $r = 'artikel';
        if(!$this->upload->do_upload($r)){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Upload File <strong> GAGAL !! </strong> </div>');
            redirect('artikel');
        } else {
            $data = [
                'nama'      =>  $this->input->post('nama'),
                'bulan'     =>  $this->input->post('bulan'),
                'judul'     =>  $this->input->post('judul'),
                'artikel'   =>  $this->upload->data('file_name')
            ];
            return $this->db->insert('artikel',$data);
        }
    }

    public function get_data(){
        $bl = $this->input->post('bln');
        $mn = ['artikel.bulan'=>$bl,'user.status'=>'santri'];
        $this->db->select('user.nama as nama,artikel.judul as judul,artikel.artikel as file,artikel.bulan as bulan');
        $this->db->from('user');
        $this->db->join('artikel','user.nama = artikel.nama','left');
        $this->db->where($mn);
        return $this->db->get();
    }
}