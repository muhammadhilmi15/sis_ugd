<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modelpasien extends CI_Model {

    function count_pasien() {
        return $this->db->count_all('tbl_pasien');
    }
    
    function count_rawat() {
        return $this->db->count_all('tbl_rawat');
    }

    function simpan_pasien($data) {
        $this->db->insert('tbl_pasien', $data);
        if ($this->db->affected_rows())
            return '1';
        else
            return'0';
    }
    
    function simpan_rawat($data) {
        $this->db->insert('tbl_rawat', $data);
        if ($this->db->affected_rows())
            return '1';
        else
            return'0';
    }

    function getDokter() {
        $this->db->get('tbl_dokter');
    }

}
