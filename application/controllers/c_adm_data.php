<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_userlogin extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_userlogin');
	}
}
