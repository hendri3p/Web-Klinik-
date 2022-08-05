<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function __construct(){
	parent::__construct();
	$this->load->model('M_datapasien');

	if($this->session->userdata('status') != "login"){
		redirect(base_url("C_login"));
	}
}

class c_admeditdata extends CI_Controller{
	public function index(){
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;
		$this->load->view('admin/v_editdata');
	}
}