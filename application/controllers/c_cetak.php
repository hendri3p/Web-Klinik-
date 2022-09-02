<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cetak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_berobat');
		$this->load->model('M_laporandatapasien');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;
		$data['pasien'] = $this->M_laporandatapasien->pasien($login);
		$this->load->view('user/cetak', $data);
	}

	public function print()
	{
		// $username = " ";
		// $id = $this->session->userdata('username');
		$data['pasien'] = $this->M_laporandatapasien->pasien('user 2');
		$this->load->view('user/usercetak',$data);
		
	}
   
}
