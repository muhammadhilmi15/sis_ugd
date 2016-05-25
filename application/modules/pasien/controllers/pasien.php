<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function index() {
        $this->load->model('modelpasien');
        $data['header'] = 'header_logout';
        $data['content'] = 'pasien';
        $data['footer'] = 'footer';
        $data['row'] = $this->modelpasien->count_pasien();
        $this->load->view('mainview', $data);
    }

    function simpan_pasien() {
        $id_pasien = $this->input->post('id_pasien');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        if ($gender == 1)
            $gender = 'L';
        elseif ($gender == 2)
            $gender = 'P';
        else
            $gender = '';
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $no = $this->input->post('no');
        $thn = $this->input->post('thn');
        $bln = $this->input->post('bln');
        $tgl = $this->input->post('tgl');
        $tgl_lahir = $thn . '-' . $bln . '-' . $tgl;
        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('thn', 'Tahun', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('bln', 'Bulan', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no', 'NO HP', 'required');
        if (($this->form_validation->run() == TRUE)) {
            $data = array('ID_PASIEN' => $id_pasien, 'NM_PASIEN' => $nama, 'GENDER' => $gender, 'TEMPAT_LAHIR' => $tempat_lahir, 'TGL_LAHIR' => $tgl_lahir, 'ALAMAT' => $alamat, 'NO_HP' => $no);
            $this->load->model('modelpasien');
            $this->modelpasien->simpan_pasien($data);
            $data['row'] = $this->modelpasien->count_rawat();
            $data['header'] = 'header';
            $data['id_pasien'] = $id_pasien;
            $data['content'] = 'rawat';
            $data['footer'] = 'footer';
            $this->load->view('mainview', $data);
        } else {
            $this->load->model('modelpasien');
            $data['header'] = 'header';
            $data['content'] = 'pasien';
            $data['footer'] = 'footer';
            $data['row'] = $this->modelpasien->count();
            $this->load->view('mainview', $data);
        }
    }
    
     function simpan_rawat() {
        $id_pasien = $this->input->post('id_pasien');
        $id_rawat = $this->input->post('id_rawat');
        $id_dokter = $this->input->post('id_dokter');
        $diagnosa = $this->input->post('diagnosa');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $tgl_masukx = $thn . '-' . $bln . '-' . $tgl;
        $tgl_keluarx = $thn . '-' . $bln . '-' . $tgl;
        $nm_dokter = $this->input->post('nm_dokter');
        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('id_rawat', 'ID Rawat', 'required');
        $this->form_validation->set_rules('id_Dokter', 'ID Dokter', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('bln_masuk', 'Bulan Masuk', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('thn_keluar', 'Tahun Keluar', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('bln_keluar', 'Bulan Keluar', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('nm_dokter', 'Nama Dokter', 'required');
        if (($this->form_validation->run() == TRUE)) {
            $data = array('ID_Rawat' => $id_rawat, 'ID_DOKTER' => $id_dokter, 'ID_PASIEN' => $id_pasien, 'DIAGNOSA' => $diagnosa, 'TGL_MASUK' => $tgl_masukx, 'TGL_KELUAR' => $tgl_keluarx, 'NM_DOKTER' => $nm_dokter);
            $this->load->model('modelpasien');
            $this->modelpasien->simpan_rawat($data);
            $data['row'] = $this->modelpasien->count_rawat();
            $data['header'] = 'header';
            $data['id_pasien'] = $id_pasien;
            $data['tbl_dokter'] = $this->modelpasien->getDokter();
            $data['content'] = 'pasien';
            $data['footer'] = 'footer';
            $this->load->view('mainview', $data);
        } else {
            $this->load->model('modelpasien');
            $data['header'] = 'header';
            $data['content'] = 'pasien';
            $data['footer'] = 'footer';
            $data['row'] = $this->modelpasien->count();
            $this->load->view('mainview', $data);
        }
    }

    function pdf($ID, $download_pdf = '') {
        $ret = '';
        $pdf_filename = $ID . '-SMKPSM1Kawedanan.pdf';
        $link_download = ($download_pdf == TRUE) ? '' : anchor(base_url() . 'index.php/psb/pdf/' . $ID . '/index/true/', '<img src="' . base_url() . 'themes/images/download.gif" height="10%" width="10%" title="Unduh Formulir">');
        $query = $this->db->query("SELECT * FROM `tbl_pasien` WHERE `id`= '{$ID}' LIMIT 1");
        if ($query->num_rows() > 0)
            $user_info = $query->row_array();
        $data_header = array(
            'title' => 'SMK PSM 1 Kawedanan',
        );
        $data_userinfo = array(
            'user_info' => $user_info,
            'link_download' => $link_download
        );
        $header = $this->load->view('header_table', $data_header, true);
        $user_info = $this->load->view('user_table', $data_userinfo, true);
        $footer = $this->load->view('footer_table', '', true);
        $output = $header . $user_info . $footer;
        if ($download_pdf == TRUE)
            generate_pdf($output, $pdf_filename);
        else
            echo $output;
    }

}
