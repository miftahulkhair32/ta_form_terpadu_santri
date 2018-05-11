<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function santri(){
        $this->db->where('status','santri');
        return $this->db->count_all_results('user');
    }

    public function menej(){
        $this->db->where('status','menejemen');
        return $this->db->count_all_results('user');
    }

    public function total(){
        return $this->db->count_all_results('user');
    }
}