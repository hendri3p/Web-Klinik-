<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_dash extends CI_Controller {

	public function index()
	{
		$this->load->view('view/adm_datauser');
	}
}
