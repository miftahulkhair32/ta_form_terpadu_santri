<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function get(){
        $dc = $this->input->post('bln');
        $ty = ['partisipasi.bulan'=>$dc,'status'=>'santri'];

        $this->db->select('username')->where('status','menejemen');
        $this->db->order_by('nama','ASC');
        $mko = $this->db->get('user');
        $n=0;
        foreach($mko->result() as $m) {
            $lk[$n] = $m->username;
            $obs[] = 'observasi.'.$lk[$n].',';
        $n++;
        }
        $n--;
        $r=$obs[0];
        while($n>0){
            $r .= $obs[$n];
        $n--;
        }

        $this->db->select('user.nama,partisipasi.total as parpro,pencapaian.total as tarpen,'.$r.'tahfizh.halaman as jumhap,tahfizh.total as jumnilper,pelanggaran.pelanggaran as jenpel,pelanggaran.total as point,pelanggaran.keterangan,artikel.judul,artikel.id,partisipasi.bulan');
        $this->db->from('user');
        $this->db->join('partisipasi','user.nama = partisipasi.nama','left');
        $this->db->join('pelanggaran','user.nama = pelanggaran.nama and pelanggaran.bulan = partisipasi.bulan','left');
        $this->db->join('observasi','user.nama = observasi.nama and observasi.bulan = partisipasi.bulan','left');
        $this->db->join('artikel','user.nama = artikel.nama and artikel.bulan = partisipasi.bulan','left');
        $this->db->join('pencapaian','user.nama = pencapaian.nama and pencapaian.bulan = partisipasi.bulan','left');
        $this->db->join('tahfizh','user.nama = tahfizh.nama and tahfizh.bulan = partisipasi.bulan','left');
        $this->db->where($ty);
        return $this->db->get();
    }

    public function menej(){
        $this->db->select('nama,username')->where('status','menejemen');
        $this->db->order_by('nama','ASC');
        return $this->db->get('user');
    }

    public function get_pdf(){
        $dc = $this->uri->segment(3);
        $ty = ['partisipasi.bulan'=>$dc,'status'=>'santri'];

        $this->db->select('username')->where('status','menejemen');
        $this->db->order_by('nama','ASC');
        $mko = $this->db->get('user');
        $n=0;
        foreach($mko->result() as $m) {
            $lk[$n] = $m->username;
            $obs[] = 'observasi.'.$lk[$n].',';
        $n++;
        }
        $n--;
        $r=$obs[0];
        while($n>0){
            $r .= $obs[$n];
        $n--;
        }

        $this->db->select('user.nama,partisipasi.total as parpro,pencapaian.total as tarpen,'.$r.'tahfizh.halaman as jumhap,tahfizh.total as jumnilper,pelanggaran.pelanggaran as jenpel,pelanggaran.total as point,pelanggaran.keterangan,artikel.judul,artikel.id,partisipasi.bulan');
        $this->db->from('user');
        $this->db->join('partisipasi','user.nama = partisipasi.nama','left');
        $this->db->join('pelanggaran','user.nama = pelanggaran.nama and pelanggaran.bulan = partisipasi.bulan','left');
        $this->db->join('observasi','user.nama = observasi.nama and observasi.bulan = partisipasi.bulan','left');
        $this->db->join('artikel','user.nama = artikel.nama and artikel.bulan = partisipasi.bulan','left');
        $this->db->join('pencapaian','user.nama = pencapaian.nama and pencapaian.bulan = partisipasi.bulan','left');
        $this->db->join('tahfizh','user.nama = tahfizh.nama and tahfizh.bulan = partisipasi.bulan','left');
        $this->db->where($ty);
        return $this->db->get();
    }

}