<?php 
 
class m_pelayanan extends CI_Model{
  function tampil_data(){
    return $this->db->get('pelayanan');
  }

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

}