<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_usrrekammedis extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporandatapasien');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;
		$data['pasien'] = $this->m_laporandatapasien->joindatapasien($login);
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
			if (!empty($this->input->get('tgl_berobat'))) {
				$data['pasien'] = $this->m_laporandatapasien->search_join($data['tgl_berobat']);
			}
		$data['searchh'] = $this->input->get('searchh');
			if (!empty($this->input->get('searchh'))) {			
				$data['pasien'] = $this->m_laporandatapasien->search_join_nama($data['searchh']);
			}	
		$this->load->view('user/v_rekammedis', $data);
	}
}
