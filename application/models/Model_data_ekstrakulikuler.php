<?php

class Model_data_ekstrakulikuler extends CI_Model {

  function __construct()
  {
    $this->load->database();
  }

  function tampil_data_ekstrakulikuler()
  {
    $this->db->select('siswa.id_siswa, ekstrakulikuler.id_ekstrakulikuler, siswa.`nama_depan`, siswa.`nama_belakang`,
    ekstrakulikuler.`nama_ekstrakulikuler`, YEAR(data_ekstrakulikuler.`tahun_mulai`) AS tahun_mulai');
    $this->db->from('data_ekstrakulikuler');
    $this->db->join('siswa','siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa`');
    $this->db->join('ekstrakulikuler', 'ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`');
    $this->db->order_by('siswa.id_siswa');
    $query = $this->db->get();
    return $query->result();
  }

  function tambah_data_ekstrakulikuler($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function tampil_edit_data_ekstrakulikuler($table, $where)
  {
    $this->db->select('siswa.id_siswa, ekstrakulikuler.id_ekstrakulikuler, siswa.`nama_depan`, siswa.`nama_belakang`,
    ekstrakulikuler.`nama_ekstrakulikuler`, YEAR(data_ekstrakulikuler.`tahun_mulai`) AS tahun_mulai');
    $this->db->from('data_ekstrakulikuler');
    $this->db->join('siswa','siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa`');
    $this->db->join('ekstrakulikuler', 'ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`');
    //$this->db->order_by('siswa.id_siswa');
    $this->db->where($where);
    $query = $this->db->get()->result();
    return $query;
  }

  function edit_data_ekstrakulikuler($table, $data, $where)
  {
    //$this->db->set('id_siswa', $data['id_siswa']);
    //$this->db->where(array('user_id' => $id, 'sender_id' => $send_id));
    //$this->db->where($where(array('id_siswa' => $id_siswa, 'id_ekstrakulikuler' => $id_ekstrakulikuler)));
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_data_ekstrakulikuler($where)
  {
    $this->db->where($where);
    $this->db->delete('data_ekstrakulikuler');
  }

}
