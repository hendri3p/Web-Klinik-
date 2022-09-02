<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admdash extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$this->load->view('admin/v_admdash');
	}
}
