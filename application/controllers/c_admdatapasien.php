<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admdatapasien extends CI_Controller {

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
		$data['pasien'] = $this->m_laporandatapasien->joindata();
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
		if (!empty($this->input->get('tgl_berobat'))) {
			$data['pasien'] = $this->m_laporandatapasien->search_join($data['tgl_berobat']);
		}
		$data['searchh'] = $this->input->get('searchh');
			if (!empty($this->input->get('searchh'))) {			
				$data['pasien'] = $this->m_laporandatapasien->search_join_nama($data['searchh']);
			}	
		$this->load->view('admin/v_admdatapasien',$data);
	}
}
