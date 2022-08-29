<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admrawatjalan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
		$this->load->model('m_laporandatapasien');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Welcome"));
		}
	}
	
	
	public function index()
	{
		$login = $this->session->userdata('user_login');
		$data['login'] = $login;
		$data['pasien'] = $this->m_laporandatapasien->tampil_data_jalan();
		$data['tgl_berobat'] = $this->input->get('tgl_berobat');
			if (!empty($this->input->get('tgl_berobat'))) {
				$data['pasien'] = $this->m_laporandatapasien->search_join($data['tgl_berobat']);
			}
		$this->load->view('admin/v_admrawatjalan',$data);
	}

	public function edit($id_hasil)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$where = array('id_hasil' => $id_hasil);
		$data['hasil'] = $this->m_berobat->edit_data($id_hasil, 'hasil')->row_array();
		$this->load->view('admin/v_editdatajalan', $data);
	}

	public function update_data($id_hasil)
	{ // check image
		if (!empty($_FILES['obat']['name'])) {
			$config['upload_path']      = './assets/file_upload';
			$config['allowed_types']    = 'gif|jpg|png|pdf|docx|doc|jpeg';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('obat')) {
				$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
				$where = array('id_hasil' => $id_hasil);
				$data['hasil'] = $this->m_berobat->edit_data($id_hasil, 'hasil')->row_array();
				$this->load->view('admin/v_editdatajalan', $data);
				// input database
			} else {
				$upload_image = array('upload_data' => $this->upload->data());
				// create thumbnail
				$config['image_library']    = 'gd2';
				$config['source_image']      = './assets/file_upload/' . $upload_image['upload_data']['file_name'];
				$config['new_image']        = './assets/file_upload/';
				$config['create_thumb']    = TRUE;
				$config['maintain_ratio']   = TRUE;
				$config['max_size']         = '2048';
				$config['thumb_marker']      = '';
				// end create thumbnail

				$hasil_diagnosa = $this->input->post('hasil_diagnosa');
				$pembayaran = $this->input->post('pembayaran');

				$data = array(
					'hasil_diagnosa' => $hasil_diagnosa,
					'obat'      => $upload_image['upload_data']['file_name'],
					'pembayaran' => $pembayaran,
				);
				$where = array(
					'id_hasil' => $id_hasil,
				);

				$this->m_berobat->update_data($where, $data, 'hasil');
				redirect('c_admrawatjalan/index');
			}
		} else {
			$hasil_diagnosa = $this->input->post('hasil_diagnosa');
			$pembayaran = $this->input->post('pembayaran');
			$obat = $this->input->post('obat');

			$data = array(
				'hasil_diagnosa' => $hasil_diagnosa,
				'obat' => $obat,
				'pembayaran' => $pembayaran,
			);
			$where = array(
				'id_hasil' => $id_hasil,
			);

			$this->m_berobat->update_data($where, $data, 'hasil');
			redirect('c_admrawatjalan/index');
		}
	}


	public function hapus($id_pasien)
	{
		$where = array(
			'id_pasien' => $id_pasien
		);
		$this->M_berobat->hapus_data($where, 'hasil');
		$this->M_berobat->hapus_data($where, 'pasien');
		redirect('c_admrawatjalan/index');
	}
}

