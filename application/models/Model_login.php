<?php

class Model_login extends CI_Model {

  function __construct()
  {
    $this->load->database();
  }

  function cek_login($table, $where) {
    return $this->db->get_where($table, $where);
  }

}
