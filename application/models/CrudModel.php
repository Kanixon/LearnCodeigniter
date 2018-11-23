<?php

class CrudModel extends CI_Model{
public function getPost(){
  $query = $this->db->get('coba');
  // TODO:
  //allowed Memory exhausted ?..
  if ($query->num_rows() > 0) {
    return $query->result();
  }
}


}


?>
