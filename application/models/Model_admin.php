<?php

class Model_admin extends CI_Model {

  function __construct()
  {
    $this->load->database();
  }

  function tampil_admin()
  {
    // return $this->db->get('admin');
    return $this->db->get('admin')->result();
  }

  function tambah_admin($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function tampil_edit_admin($table, $where)
  {
    return $this->db->get_where($table, $where)->result();
  }

  function edit_admin($table, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_admin($where)
  {
    $this->db->where($where);
    $this->db->delete('admin');
  }

}
