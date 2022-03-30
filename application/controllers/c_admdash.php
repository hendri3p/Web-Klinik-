<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admdash extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_admdash');
	}
}
