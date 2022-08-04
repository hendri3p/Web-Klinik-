<?php

class m_laporandatapasien extends CI_Model
{
    function tampil_data_medis()
    {
        return $this->db->get('pasien');
    }


    function joindata()
    {
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tampil_data_jalan()
	{

		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('berobat', 'berobat.nik = pasien.nik');
		$this->db->where('jenis_perawatan', 'KB');
		$this->db->where('jenis_perawatan', 'Imunisasi');
		$this->db->where('jenis_perawatan', 'Pemeriksaan Kehamilan');
		$query = $this->db->get();
		return $query->result_array();
    }
    
    // function joindatapoli($jenis_poli)
    // {
    //     $this->db->select('*');
    //     $this->db->from('berobat');
    //     $this->db->join('pasien', 'pasien.nik = berobat.nik');
    //     $this->db->where('jenis_poli', $jenis_poli);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    function joindatapasien($username)
    {
        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function search_join($tgl_berobat)
    {

        $this->db->select('*');
        $this->db->from('berobat');
        $this->db->join('pasien', 'pasien.nik = berobat.nik');
        $this->db->where('tgl_berobat', $tgl_berobat);
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
    
}
