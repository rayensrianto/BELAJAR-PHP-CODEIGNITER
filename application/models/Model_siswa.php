<?php

class Model_siswa extends CI_Model {

  function __construct()
  {
    $this->load->database();
  }

  function tampil_siswa()
  {
    return $this->db->get('siswa')->result();
  }

  function tambah_siswa($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function tampil_edit_siswa($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  function edit_siswa($table, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_siswa($where)
  {
    $this->db->where($where);
    $this->db->delete('siswa');
  }

}
