<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->model('modellogin');
        $data['header'] = 'header';
        $data['content'] = 'login';
        $data['footer'] = 'footer';
        $this->load->view('mainview', $data);
    }

    public function in() {
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
        if ($this->form_validation->run() == FALSE) {
            $data['header'] = 'header';
            $data['content'] = 'login';
            $data['footer'] = 'footer';
            $this->load->view('mainview', $data);
        } else {
            $this->load->model('modellogin');
            $valid_user = $this->modellogin->login();
            if ($valid_user == FALSE) {
                $data['header'] = 'header';
                $data['content'] = 'login';
                $data['footer'] = 'footer';
                $this->load->view('mainview', $data);
            } else {
                $this->session->set_userdata('username', $valid_user->USERNAME);
                $this->session->set_userdata('level', $valid_user->LEVEL);

                switch ($valid_user->LEVEL) {
                    case 1: //dokter
                        $data['level'] = $this->session->userdata('level');
                        redirect('logindokter', $data);
                        break;
                    case 2: //admin
                        $data['level'] = $this->session->userdata('level');
                        redirect('pasien', $data);
                        break;
                    case 3: //apoteker
                        $data['level'] = $this->session->userdata('level');
                        redirect('apoteker', $data);
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('beranda');
    }

}
