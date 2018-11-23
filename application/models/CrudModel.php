<?php

class CrudModel extends CI_Model{
public function getPost(){
  $query = $this->db->get('employees');
  // TODO:
  //allowed Memory exhausted ?..
  if ($query->num_rows() > 0) {
    return $query->result();
  }
}

public function getEmployeeData($limit,$start) {
  $query = $this->db->get('employees',$limit,$start);
  return $query;
}



}


?>
