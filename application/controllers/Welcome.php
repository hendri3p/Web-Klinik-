<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		        // Cek apakah sudah login atau belum?
        if ($this->session->userdata('user_login')) {
            redirect('C_admdash');
        }
        if ($this->session->userdata('pasien_login')) {
            redirect('C_usrdash');
        }

		$this->load->view('welcome_message');
	}

	public function register(){
		$this->form_validation->set_rules('nama_user', 'nama_user','trim|required');
		$this->form_validation->set_rules('username', 'username','trim|required|is_unique[pasien.username]');
		$this->form_validation->set_rules('password', 'password','trim|required');
		$this->form_validation->set_rules('umur', 'umur','trim');
		$this->form_validation->set_rules('alamat', 'alamat','trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp','trim');
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
			redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('Welcome');
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

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $pasien = $this->db->get_where('pasien', ['username' => $username])->row_array();


        if ($user)
        {
            if ($password == $user['password'])
            {
                $data = [
                'user_login' => $user['username'],
                'status' => "login"
                ];
            
                $this->session->set_userdata($data);
                redirect('C_admdash');
            }
            else 
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
            redirect(base_url());
            }
        }

     else if ($pasien)
        {
            if ($password == $pasien['password'])
            {
                $data = [
                    'pasien_login' => $pasien['username'],
                    'status' => "login"
                ];
                
                $this->session->set_userdata($data);
                redirect('C_usrdash');
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
        $this->session->sess_destroy();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil Keluar! </div>');
                redirect(base_url());
	}
	
}
