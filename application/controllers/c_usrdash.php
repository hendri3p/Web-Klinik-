<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_usrdash extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_userdash');
	}
}
