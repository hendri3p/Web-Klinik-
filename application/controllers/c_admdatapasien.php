<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admdatapasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporandatapasien');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$data['pasien'] = $this->M_laporandatapasien->joindata();
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
		if (!empty($this->input->get('tgl_berobat'))) {
			$data['pasien'] = $this->M_laporandatapasien->search_join_data($data['tgl_berobat']);
		}
		$data['searchh'] = $this->input->get('searchh');
			if (!empty($this->input->get('searchh'))) {			
				$data['pasien'] = $this->M_laporandatapasien->search_join_nama_data($data['searchh']);
			}	
		$this->load->view('admin/v_admdatapasien',$data);
	}
}
