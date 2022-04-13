<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_userdaftarberobat extends CI_Controller {
		public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_userdaftarberobat');
		$this->load->model('m_pelayanan');		
		$this->load->helper('url');
    }

    public function index(){
		$this->load->view('user/v_userdaftarberobat');    	
    }

	public function daftar(){
		$nama_user = $this->input->post('nama_user');		
		$keluhan = $this->input->post('keluhan');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$jenis_perawatan = $this->input->post('jenis_perawatan');
		$tgl_berobat = $this->input->post('tgl_berobat');

						
 
		$data = array(
			'nama_user' => $nama_user,
			'keluhan' => $keluhan,
			'riwayat_penyakit' => $riwayat_penyakit,
			'jenis_perawatan' => $jenis_perawatan,
			'tgl_berobat' => $tgl_berobat
			);
		$data1 = array(
			'jenis_perawatan' => $jenis_perawatan,
			'tgl_berobat' => $tgl_berobat
			);		
		$this->db->insert('pendaftaran',$data);
		$this->db->insert('pelayanan',$data1);		
		redirect('c_usrdash');
	}	

}
