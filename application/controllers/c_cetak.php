<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_cetak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
		$this->load->model('m_laporandatapasien');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$this->load->view('user/cetak');
	}

	public function print()
	{
		$id = $this->session->userdata('username');
		$data['joindatapasien'] = $this->m_laporandatapasien->joindatapasien($username);
		$this->load->view('user/cetak',$data);
	}
   
}
