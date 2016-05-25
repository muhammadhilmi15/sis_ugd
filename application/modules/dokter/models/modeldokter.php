<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modeldokter extends CI_Model {

    public function login_dokter() {
        $username = set_value('username');
        $password = set_value('password');
        $hasil = $this->db->where('USERNAME', $username)
                ->where('PASSWORD', $password)
                ->limit(1)
                ->get('tbl_pengguna');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

}
