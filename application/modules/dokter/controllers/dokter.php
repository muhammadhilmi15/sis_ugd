<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokter extends CI_Controller {

    public function index() {
        if ($this->session->userdata('tipe') == 'tbl_pengguna') {
            $data['header'] = 'header';
            $data['content'] = 'logindokter';
            $data['footer'] = 'footer';
            $data['tipe'] = $this->session->userdata('tipe');
            $this->load->view('mainview', $data);
        } else {
            $data['header'] = 'header';
            $data['content'] = 'dokter';
            $data['footer'] = 'footer';
            $this->load->view('mainview', $data);
        }
    }

}
