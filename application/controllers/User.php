<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_user');
        $this->load->model('keamanan');
    }
    
	public function index(){
        if($this->session->userdata('login') == TRUE){
            redirect('home');
        } else {
            $this->load->view('tamp_login');
        }
    }

    public function daftar(){
        $this->keamanan->cek_login();
        $this->keamanan->cek_santri();
        $isi['judul']       =   'Tambah';
        $isi['subjudul']    =   'User';
        $isi['konten']      =   'tamp_daftar';
        $this->load->view('standar',$isi);
    }

    public function proses_daftar(){
        $this->form_validation->set_rules('nama','Nama','trim|required|min_length[3]');
        $this->form_validation->set_rules('nim','Nim','trim|min_length[7]|max_length[13]');
        $this->form_validation->set_rules('daerah','Asal Daerah','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[33]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf','Password Confirmation','trim|required|matches[password]');
        $this->form_validation->set_rules('status','Status','required');
        $this->form_validation->set_rules('foto','Foto','');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Pendaftaran <strong> GAGAL !! </strong> </div>');
            redirect('user/daftar','refresh');
        } else {
            $foto = $this->m_user->upload($this->input->post('foto'));
            if($foto['hasil']=='sukses'){
                $sta = $this->input->post('status');
                if($sta == 'menejemen'){
                    $this->m_user->addmen();
                    if($this->m_user->reg()){
                        $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Pendaftar Pengasuhan <strong> SUKSES !!</strong></div>');
                        $this->session->set_flashdata('info1','<div class="alert alert-info"><i class="ace icon fa fa-check"></i><strong> SUKSES !!</strong> Menambahkan table Pengasuhan Ke Observasi </div>');
                        redirect('home');
                    }
                } else {
                    if($this->m_user->reg()){
                        $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Pendaftar Santri <strong> SUKSES !!</strong></div>');
                        redirect('user/daftar','refresh');
                    }
                }
            } else {
                // kalau upload gagal
                $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Upload foto <strong> GAGAL !! </strong> </div>');
                $this->session->set_flashdata('info1','<div class="alert alert-info"><i class="ace icon fa fa-check"></i><strong> CATATAN !!</strong> Ukuran Foto Tidak Boleh Lebih 200 MB </div>');
                redirect('user/daftar','refresh');
            }
        }
    }

    public function proses_login(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('tamp_login');
        } else {

            if($this->m_user->cek_user()->num_rows()==1){ // cek username lewat model apakah ada atau tidak

                $db = $this->m_user->cek_user()->row(); // vertifikasi password sekaligus di hash

                if(hash_verified($this->input->post('password'),$db->password)){
                    /*
                    * login berhasil
                    * maka buat session
                    * yang banyak
                    */
                    $sess = [
                        'login'     =>  TRUE,
                        'nama'      =>  $db->nama,
                        'username'  =>  $db->username,
                        'email'     =>  $db->email,
                        'status'    =>  $db->status,
                        'foto'      =>  $db->foto
                    ];
                    $this->session->set_userdata($sess);
                    redirect('home');

                } else {
                    $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Maaf Password SALAH !!!</div>');
                    redirect('user','refresh');
                }
            } else {
                $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Maaf Username tidak terdaftar !!!</div>');
                    redirect('user','refresh');
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('foto');
        $this->session->sess_destroy();
        redirect('user');
    }

    public function cek_daftar(){
        $this->keamanan->cek_login();
        $this->keamanan->cek_santri();
        $isi['judul']       =   'Daftar';
        $isi['subjudul']    =   'User';
        $isi['konten']      =   'user/tamp_cek-daftar';
        $isi['santri']      =   $this->m_user->get_santri();
        $isi['menej']       =   $this->m_user->get_menej();
        $this->load->view('standar',$isi);
    }

    public function profil(){
        $this->keamanan->cek_login();
        $isi['judul']       =   'User';
        $isi['subjudul']    =   'Profil';
        $isi['konten']      =   'user/profil';
        $isi['data']        =   $this->m_user->data_pro();
        $this->load->view('standar',$isi);
    }
    
    public function hapus_user(){
        $this->keamanan->cek_login();
        $this->keamanan->cek_santri();
        $nama = $this->uri->segment(3);
        $this->db->where('username',$nama);
        $da = $this->db->get('user')->row_array();
        if($da['status']=='menejemen'){
            $this->m_user->hap_menej();
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong> Peringatan !!! </strong> Anda Menghapus User Pengasuhan Serta Data-Data </div>');
            redirect('home');
        } else {
            $t = $this->m_user->hap_sant();
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong> Peringatan !!! </strong> Anda Menghapus User Santri Serta Data-Data </div>');
            redirect('home');
        }
    }

    public function edit(){
        $this->keamanan->cek_login();
        $isi['judul']       =   'User';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'user/tamp_edi-san';
        $isi['data']        =   $this->m_user->edit_san()->row_array();
        $this->load->view('standar',$isi);
    }

    public function proses_edit_san(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[33]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('passlama','Passlama','trim|min_length[8]');
        $this->form_validation->set_rules('password','Password','trim|min_length[8]');
        $this->form_validation->set_rules('passconf','Password Confirmation','trim|matches[password]');
        $this->form_validation->set_rules('foto','Foto','');
        $jd = $this->session->userdata('status');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit User <strong> GAGAL !! </strong> </div>');
            redirect('user/edit','refresh');
        } else {
            if($jd == 'santri' ){
                $this->m_user->pro_ed_san();
                $r = $this->m_user->cek_user()->row();
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('foto');
                $sess = [
                    'username'  =>  $r->username,
                    'email'     =>  $r->email,
                    'foto'      =>  $r->foto
                ];
                $this->session->set_userdata($sess);
                $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit User <strong> SUKSES !!</strong></div>');
                redirect('home');
            } else {
                $this->m_user->pro_ed_men();
                $this->m_user->pro_ed_san();
                $r = $this->m_user->cek_user()->row();
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('foto');
                $sess = [
                    'username'  =>  $r->username,
                    'email'     =>  $r->email,
                    'foto'      =>  $r->foto
                ];
                $this->session->set_userdata($sess);
                $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit User <strong> SUKSES !!</strong></div>');
                redirect('home');
            }
        }
    }

    public function edit_user(){
        $this->keamanan->cek_login();
        $this->keamanan->cek_santri();
        $user = $this->uri->segment(3);
        $this->db->where('username',$user);
        $e = $this->db->get('user')->row_array();
        $isi['judul']       =   'User';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'user/tamp_edi-men';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }

    public function proses_edit_men(){
        $this->form_validation->set_rules('nim','Nim','trim|min_length[7]|max_length[13]');
        $this->form_validation->set_rules('daerah','Asal Daerah','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[33]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit User <strong> GAGAL !! </strong> </div>');
            redirect('home');
        } else {
            $hg = $this->input->post('namalama');
            $this->db->where('nama',$hg);
            $rt = $this->db->get('user')->row_array();
            if($rt['status'] == 'menejemen'){
                if($this->m_user->proses_edit_run() == FALSE){
                    $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit User <strong> GAGAL !! </strong> Mungkin Nama atau Username Telah Digunakan </div>');
                    redirect('home');
                } else {
                    $this->m_user->proses_edit_mod();
                }
            } else {
                if($this->m_user->proses_edit_run() == FALSE){
                    $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit User <strong> GAGAL !! </strong> Mungkin Nama atau Username Telah Digunakan </div>');
                    redirect('home');
                } else {
                    $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit User <strong> SUKSES !!</strong></div>');
                    redirect('home');
                }
            }
        }
    }
}
