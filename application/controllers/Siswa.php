<?php

class Siswa extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_siswa');
    $this->load->helper('url');
    $this->load->library('form_validation');

    if ($this->session->userdata('status') != 'login') {
        redirect(base_url('login'));
      }
    $this->load->view('header');
  }

  function index()
  {
    $data['siswa'] = $this->model_siswa->tampil_siswa();
    $this->load->view('page_siswa_tampil', $data);
  }

  function form_tambah()
  {
    $this->load->view('page_siswa_tambah');
  }

  function action_tambah()
  {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $nama_depan     = $this->input->post('nama_depan');
      $nama_belakang  = $this->input->post('nama_belakang');
      $email          = $this->input->post('email');
      $no_hp          = $this->input->post('no_hp');
      $alamat         = $this->input->post('alamat');
      $jenis_kelamin  = $this->input->post('jenis_kelamin');

      $data = array(
        'nama_depan'    => $nama_depan,
        'nama_belakang' => $nama_belakang,
        'email'         => $email,
        'no_hp'         => $no_hp,
        'alamat'        => $alamat,
        'jenis_kelamin' => $jenis_kelamin
      );

      $this->model_siswa->tambah_siswa('siswa', $data);
      redirect('siswa/index');
    }
    else
    {
      $this->load->view('page_siswa_tambah');
    }

  }

  function form_edit($id_siswa)
  {
    $where = array('id_siswa' => $id_siswa);
    $data['siswa'] = $this->model_siswa->tampil_edit_siswa('siswa', $where)->result();
    $this->load->view('page_siswa_edit', $data);
  }

  function action_edit()
  {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $id_siswa       = $this->input->post('id_siswa');
      $nama_depan     = $this->input->post('nama_depan');
      $nama_belakang  = $this->input->post('nama_belakang');
      $email          = $this->input->post('email');
      $no_hp          = $this->input->post('no_hp');
      $alamat         = $this->input->post('alamat');
      $jenis_kelamin  = $this->input->post('jenis_kelamin');

      $data = array(
        'nama_depan'    => $nama_depan,
        'nama_belakang' => $nama_belakang,
        'email'         => $email,
        'no_hp'         => $no_hp,
        'alamat'        => $alamat,
        'jenis_kelamin' => $jenis_kelamin
      );

      $where = array('id_siswa' => $id_siswa);
      $this->model_siswa->edit_siswa('siswa', $data, $where);
      redirect('siswa/index');
    }
    else
    {
      $this->load->view('page_siswa_edit');
    }
  }

  function action_hapus($id_siswa)
  {
    $where = array('id_siswa' => $id_siswa);
    $this->model_siswa->hapus_siswa($where);
    redirect('siswa/index');
  }


}
