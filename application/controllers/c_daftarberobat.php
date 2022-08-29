<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_daftarberobat extends CI_Controller {
		public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_laporandatapasien');
		$this->load->model('m_berobat');	
		$this->load->helper('url');
    }

    public function index(){
		$this->load->view('admin/v_daftarberobat');    	
    }

	public function daftar(){
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;		
		$data['pasien'] = $this->m_laporandatapasien->joindatapasien($login);


		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');			
		$keluhan = $this->input->post('keluhan');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$jenis_perawatan = $this->input->post('jenis_perawatan');
		$tgl_berobat = $this->input->post('tgl_berobat');

						
 
		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'keluhan' => $keluhan,
			'riwayat_penyakit' => $riwayat_penyakit,
			'jenis_perawatan' => $jenis_perawatan,
			'tgl_berobat' => $tgl_berobat
			);
		$this->db->insert('berobat',$data);
		redirect('c_admdash');
	}	

}
