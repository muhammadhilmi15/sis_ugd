<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index(){
		$this->load->model('modelberanda');
		$data['header']='header';
		$data['content']='beranda';
		$data['footer']='footer';
		$data['berita']=$this->modelberanda->get('tbl_berita_igd');
		$this->load->view('mainview',$data);
	}
}
