<?php

class Model_ekstrakulikuler extends CI_Model {

  function __construct()
  {
    $this->load->database();
  }

  function tampil_ekstrakulikuler()
  {
    return $this->db->get('ekstrakulikuler')->result();
  }

  function tambah_ekstrakulikuler($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function tampil_edit_ekstrakulikuler($table, $where)
  {
    return $this->db->get_where($table, $where)->result();
  }

  function edit_ekstrakulikuler($table, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_ekstrakulikuler($where)
  {
    $this->db->where($where);
    $this->db->delete('ekstrakulikuler');
  }

}
