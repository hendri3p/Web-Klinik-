<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_daftar_berobat extends CI_Controller {

	public function index()
	{
		$this->load->view('usr_daftarberobat');
	}
}
