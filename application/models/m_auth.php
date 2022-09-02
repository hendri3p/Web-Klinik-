<?php 
 
class M_auth extends CI_Model{
  public function __construct()
  {
        parent::__construct();
  }
  
  function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

  function register($username,$password,$nama_user, $umur, $alamat, $no_telp){
    $data_user = array(
      'username'=>$username,      
      'password'=>$password,
      'nama_user'=>$nama_user,
      'umur'=>$umur,
      'alamat'=>$alamat,
      'no_telp'=>$no_telp
    );
    $this->db->insert('pasien',$data_user);
  }
}
