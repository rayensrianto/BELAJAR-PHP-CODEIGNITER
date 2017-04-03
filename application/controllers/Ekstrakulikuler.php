<?php

class Ekstrakulikuler extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_ekstrakulikuler');
    $this->load->helper('url');
    $this->load->library('form_validation');

    if ($this->session->userdata('status') != 'login') {
        redirect(base_url('login'));
      }
    $this->load->view('header');
  }

  function index()
  {
    $data['ekstrakulikuler'] = $this->model_ekstrakulikuler->tampil_ekstrakulikuler();
    $this->load->view('page_ekstrakulikuler_tampil', $data);
  }

  function form_tambah()
  {
    $this->load->view('page_ekstrakulikuler_tambah');
  }

  function action_tambah()
  {
    $this->form_validation->set_rules('nama_ekstrakulikuler', 'Nama Ekstrakulikuler', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $nama_ekstrakulikuler     = $this->input->post('nama_ekstrakulikuler');
      $keterangan  = $this->input->post('keterangan');

      $data = array(
        'nama_ekstrakulikuler' => $nama_ekstrakulikuler,
        'keterangan'           => $keterangan
      );

      $this->model_ekstrakulikuler->tambah_ekstrakulikuler('ekstrakulikuler', $data);
      redirect('ekstrakulikuler/index');
    }
    else
    {
      $this->load->view('page_ekstrakulikuler_tambah');
    }

  }

  function form_edit($id_ekstrakulikuler)
  {
    $where = array('id_ekstrakulikuler' => $id_ekstrakulikuler);
    $data['ekstrakulikuler'] = $this->model_ekstrakulikuler->tampil_edit_ekstrakulikuler('ekstrakulikuler', $where);
    $this->load->view('page_ekstrakulikuler_edit', $data);
  }

  function action_edit()
  {
    $this->form_validation->set_rules('nama_ekstrakulikuler', 'Nama Ekstrakulikuler', 'required');
    //$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $id_ekstrakulikuler       = $this->input->post('id_ekstrakulikuler');
      $nama_ekstrakulikuler     = $this->input->post('nama_ekstrakulikuler');
      $keterangan               = $this->input->post('keterangan');

      $data = array(
        'nama_ekstrakulikuler' => $nama_ekstrakulikuler,
        'keterangan'           => $keterangan
      );
      $where = array('id_ekstrakulikuler' => $id_ekstrakulikuler);
      $this->model_ekstrakulikuler->edit_ekstrakulikuler('ekstrakulikuler', $data, $where);
      redirect('ekstrakulikuler/index');
    }
    else
    {
      $this->load->view('page_ekstrakulikuler_edit');
    }
  }

  function action_hapus($id_ekstrakulikuler)
  {
    $where = array('id_ekstrakulikuler' => $id_ekstrakulikuler);
    $this->model_ekstrakulikuler->hapus_ekstrakulikuler($where);
    redirect('ekstrakulikuler/index');
  }


}
