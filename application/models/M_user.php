<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function upload(){
        // cek file yang masuk
        $config['upload_path']      =   './foto/';
        $config['allowed_types']    =   'jpg|jpeg|png';
        $this->upload->initialize($config);
        // cek foto yang di upload
        if($this->upload->do_upload('foto')){
            $index = ['hasil'=>'sukses','file'=>$this->upload->data()];
            return $index;
        }else{
            $index = ['hasil'=>'gagal','file'=>$this->upload->data()];
            return $index;
        }
    }

    public function reg(){
        $data = [
            'nama'      =>  $this->input->post('nama'),
            'username'  =>  $this->input->post('username'),
            'nim'       =>  $this->input->post('nim'),
            'daerah'    =>  $this->input->post('daerah'),
            'password'  =>  get_hash($this->input->post('password')),
            'email'     =>  $this->input->post('email'),
            'status'    =>  $this->input->post('status'),
            'foto'      =>  $this->upload->data('file_name')
        ];
        return $this->db->insert('user',$data);
    }

    public function cek_user(){
        return $this->db->get_where('user',['username' => $this->input->post('username')]);
    }

    public function addmen(){
        $this->load->dbforge();
        $df = $this->input->post('username');
        $jkl = [
            $df => ['type' => 'INT','null'=>TRUE]
        ];
        return $this->dbforge->add_column('observasi',$jkl);
    }

    public function get_santri(){
        $this->db->where('status','santri');
        return $this->db->get('user');
    }

    public function get_menej(){
        $this->db->where('status','menejemen');
        return $this->db->get('user');
    }

    public function data_pro(){
        $up = $this->session->userdata('nama');
        $this->db->where('nama',$up);
        return $this->db->get('user');
    }

    public function hap_menej(){
        $this->load->dbforge();
        $nam = $this->uri->segment(3);
        $this->dbforge->drop_column('observasi',$nam);
        $this->db->where('username',$nam);
        $da = $this->db->get('user')->row_array();
        unlink("./foto/".$da['foto']);
        $this->db->where('nama',$da['nama']);
        return $this->db->delete('user');
    }

    public function hap_sant(){
        $nam = $this->uri->segment(3);
        $dat = $this->db->where('username',$nam)->get('user')->row_array();
        unlink("./foto/".$dat['foto']);
        $this->db->where('nama',$dat['nama']);
        $this->db->delete('pelanggaran');
        $this->db->where('nama',$dat['nama']);
        $this->db->delete('pencapaian');
        $this->db->where('nama',$dat['nama']);
        $this->db->delete('tahfizh');
        $this->db->where('nama',$dat['nama']);
        $this->db->delete('observasi');
        $this->db->where('nama',$dat['nama']);
        return $this->db->delete('user');
    }

    public function edit_san(){
        $sak = $this->session->userdata('nama');
        $this->db->where('nama',$sak);
        return $this->db->get('user');
    }

    public function pro_ed_san(){
        $wer = $this->input->post('passlama');
        $www = $this->input->post('password');
        $wew = $this->input->post('passconf');
        $klo = $this->session->userdata('nama');
        if($wer && ($www || $wew) != null){
            $this->db->where('nama',$klo);
            $cop = $this->db->get('user')->row_array();
            if(hash_verified($wer,$cop['password'])){
                $bj = [
                    'password'  =>  get_hash($www)
                ];
                $this->db->where('nama',$klo);
                $this->db->update('user',$bj);
            } else {
                $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Maaf Password Lama SALAH !!!</div>');
                redirect('user/edit','refresh');
            }
        }
        $config['upload_path']      =   './foto/';
        $config['allowed_types']    =   'jpg|jpeg|png';
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');
        $pop = $this->upload->data('is_image');
        if($pop != 0){
            $this->db->where('nama',$klo);
            $cop = $this->db->get('user')->row_array();
            unlink("./foto/".$cop['foto']);
            $gh = [
                'foto'  =>  $this->upload->data('file_name')
            ];
            $this->db->where('nama',$klo);
            $this->db->update('user',$gh);
        }
        $nom = [
            'username'  =>  $this->input->post('username'),
            'email'     =>  $this->input->post('email')
        ];
        $this->db->where('nama',$klo);
        return $this->db->update('user',$nom);
    }

    public function pro_ed_men(){
        $this->load->dbforge();
        $nm = $this->input->post('username');
        $this->db->where('nama',$this->session->userdata('nama'));
        $cop = $this->db->get('user')->row_array();
        if($nm != $cop['username']){
            $lol = [
                $cop['username']    =>  [
                    'name'  =>  $nm,
                    'type'  =>  'INT',
                    'null'  =>  TRUE
                ],
            ];
            return $this->dbforge->modify_column('observasi',$lol);
        }
    }

    public function proses_edit_mod(){
        $this->load->dbforge();
        $a = $this->input->post('namalama');
        $c = $this->input->post('username');
        $this->db->where('nama',$a);
        $rt = $this->db->get('user')->row_array();
        if($c != $rt['username']){
            $lol = [
                $rt['username']    =>  [
                    'name'  =>  $c,
                    'type'  =>  'INT',
                    'null'  =>  TRUE
                ],
            ];
            return $this->dbforge->modify_column('observasi',$lol);
        }
    }

    public function proses_edit_run(){
        $a = $this->input->post('namalama');
        $this->db->where('nama',$a);
        $jiji = $this->db->get('user')->row_array();
        $k = $jiji['id'];
        $data = [
            'nim'       =>  $this->input->post('nim'),
            'username'  =>  $this->input->post('username'),
            'email'     =>  $this->input->post('email'),
            'daerah'    =>  $this->input->post('daerah')
        ];
        $this->db->where('id',$k);
        return $this->db->update('user',$data);
    }
}
