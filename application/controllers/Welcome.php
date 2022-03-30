<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index()
	{
		        // Cek apakah sudah login atau belum?
        if ($this->session->userdata('admin_login')) {
            redirect('c_admdash');
        }
        if ($this->session->userdata('user_login')) {
            redirect('c_usrdash');
        }

		$this->load->view('welcome_message');
	}

	public function register(){
		$this->form_validation->set_rules('nama_user', 'nama_user','trim|required');
		$this->form_validation->set_rules('username', 'username','trim|required');
		$this->form_validation->set_rules('password', 'password','trim|required');
		$this->form_validation->set_rules('umur', 'umur','trim|required');
		$this->form_validation->set_rules('alamat', 'alamat','trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp','trim|required');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama_user = $this->input->post('nama_user');
			$umur = $this->input->post('umur');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$this->m_auth->register($username,$password,$nama_user,$umur,$alamat,$no_telp);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('welcome');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('welcome');
		}
	}

	public function login(){

    
        
        $this->form_validation->set_rules('username','username','trim|required', [

            'required' => 'Username Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password','password','trim|required', [

            'required' => 'Password Tidak Boleh Kosong!'
        ]);

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        $user = $this->db->get_where('user', ['username' => $username])->row_array();


        if ($admin)
        {
            if ($password == $admin['password'])
            {
                $data = [
                    'admin_login' => $admin['username'],

                    
                ];
                $this->session->set_userdata($data);
                redirect('c_admdash');
            }
            else 
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
            redirect(base_url());
            }
        }

     else if ($user)
        {
            if ($password == $user['password'])
            {
                $data = [
                    'user_login' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('c_usrdash');
            }
            else 
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
            redirect(base_url());
            }
        }

        
        else 
        {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Akun tidak terdaftar! </div>');
            redirect(base_url());
        }
	}
	public function logout(){
		        $this->session->unset_userdata('admin_login');
        $this->session->unset_userdata('user_login');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil Keluar! </div>');
            redirect(base_url());
	}
	
}
