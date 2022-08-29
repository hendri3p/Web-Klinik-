<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_userdaftarberobat extends CI_Controller {
		public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_laporandatapasien');
		$this->load->model('m_userdaftarberobat');	
		$this->load->helper('url');
    }

    public function index(){
		$this->load->view('user/v_userdaftarberobat');    	
    }

	public function daftar(){
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;		
		$data['pasien'] = $this->m_laporandatapasien->joindatapasien($login);

		$nama_user = $this->input->post('nama_user');			
		$keluhan = $this->input->post('keluhan');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$jenis_perawatan = $this->input->post('jenis_perawatan');
		$tgl_berobat = $this->input->post('tgl_berobat');

		// $max = $this->m_userdaftarberobat->maxid();

		$data = array(
			'username' => $login,
			'nama_user' => $nama_user,
			'keluhan' => $keluhan,
			'riwayat_penyakit' => $riwayat_penyakit,
			'jenis_perawatan' => $jenis_perawatan,
			'tgl_berobat' => $tgl_berobat
			);

		$data2 = array(
			'username' => $login,
			'obat' => '',
			'hasil_diagnosa' => '',
			// 'id_berobat' => $max
			);
		$this->db->insert('berobat',$data);
		$this->db->insert('hasil',$data2);
		redirect('c_usrdash');
	}	

}
