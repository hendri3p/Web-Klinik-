<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usrdash extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}
	
	public function index()
	{
		$login = $this->session->userdata('pasien_login');
		$data['login'] = $login;
		// return $data['login'];
		$this->load->view('user/v_userdash');
	}
}
