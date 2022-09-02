<?php

class M_laporandatapasien extends CI_Model
{
    function tampil_data_medis()
    {
        return $this->db->get('pasien');
    }


    function joindata()
    {
        $this->db->select('*');
        $this->db->from('hasil');
		$this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_data($tgl_berobat)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.username = berobat.username', 'full outer join');
		$this->db->join('hasil', 'hasil.id_berobat = berobat.id_berobat', 'full outer join');
        $this->db->where('tgl_berobat', $tgl_berobat);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_nama_data($searchh)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('hasil');
        $this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $this->db->where('berobat.nama_user', $searchh);
        $this->db->or_where('jenis_perawatan', $searchh);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampil_data_jalan()
	{

		$this->db->select('*');
		$this->db->from('hasil');
		$this->db->join('pasien', 'pasien.username = hasil.username');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat');
		$this->db->where('jenis_perawatan', 'KB');
		$this->db->or_where('jenis_perawatan', 'Imunisasi');
		$this->db->or_where('jenis_perawatan', 'Pemeriksaan Kehamilan');
		$query = $this->db->get();
		return $query->result_array();
    }
    
    public function tampil_data_inap()
	{

		$this->db->select('*');
		$this->db->from('hasil');
		$this->db->join('pasien', 'pasien.username = hasil.username');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat');
		$this->db->where('jenis_perawatan', 'Bersalin');
		
		$query = $this->db->get();
		return $query->result_array();
    }

    function pasien($username)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function joindatapasien($username)
    {
        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('hasil');
        $this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $this->db->where('hasil.username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function search_join($tgl_berobat)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.username = berobat.username', 'full outer join');
		$this->db->join('hasil', 'hasil.id_berobat = berobat.id_berobat', 'full outer join');
        $this->db->where('tgl_berobat', $tgl_berobat);
        $this->db->where('jenis_perawatan', 'KB');
		$this->db->or_where('jenis_perawatan', 'Imunisasi');
		$this->db->or_where('jenis_perawatan', 'Pemeriksaan Kehamilan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_inap($tgl_berobat)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.username = berobat.username', 'full outer join');
		$this->db->join('hasil', 'hasil.id_berobat = berobat.id_berobat', 'full outer join');
        $this->db->where('tgl_berobat', $tgl_berobat);
        $this->db->where('jenis_perawatan', 'Bersalin');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_user($tgl_berobat,$username)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.username = berobat.username', 'full outer join');
		$this->db->join('hasil', 'hasil.id_berobat = berobat.id_berobat', 'full outer join');
        $this->db->where('tgl_berobat', $tgl_berobat);
        $this->db->where('berobat.username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_nama($searchh)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('hasil');
        $this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $this->db->where('berobat.nama_user', $searchh);
        $this->db->where('jenis_perawatan', 'KB');
		$this->db->or_where('jenis_perawatan', 'Imunisasi');
		$this->db->or_where('jenis_perawatan', 'Pemeriksaan Kehamilan');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_nama_inap($searchh)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('hasil');
        $this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $this->db->where('berobat.nama_user', $searchh);
        $this->db->where('jenis_perawatan', 'Bersalin');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join_nama_user($searchh,$username)
    {

        $this->db->select('tgl_berobat, berobat.nama_user, umur, alamat, no_telp, jenis_perawatan, riwayat_penyakit, keluhan, obat, hasil_diagnosa,pembayaran, pasien.username, id_hasil');
        $this->db->from('hasil');
        $this->db->join('pasien', 'pasien.username = hasil.username', 'full outer join');
		$this->db->join('berobat', 'berobat.id_berobat = hasil.id_berobat', 'full outer join');
        $this->db->where('berobat.nama_user', $searchh);
        $this->db->or_where('jenis_perawatan', $searchh);
        $this->db->where('hasil.username', $username);
        
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
    }

    function view_all(){  

        $this->db->select('*');    
        $this->db->from('pasien');     
        return $query = $this->db->get()->result_array();
    }        
    
}
