<?php

class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_admin');
    $this->load->helper('url');
    $this->load->library('form_validation');

    if ($this->session->userdata('status') != 'login') {
        redirect(base_url('login'));
      }
    $this->load->view('header');
  }

  function index()
  {
    $data['admin'] = $this->model_admin->tampil_admin();
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    $this->load->view('page_admin_tampil', $data);
  }

  function form_tambah()
  {
    $this->load->view('page_admin_tambah');
  }

  function action_tambah()
  {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $nama_depan     = $this->input->post('nama_depan');
      $nama_belakang  = $this->input->post('nama_belakang');
      $email          = $this->input->post('email');
      $password       = $this->input->post('password');

      $data = array(
        'nama_depan' => $nama_depan,
        'nama_belakang' => $nama_belakang,
        'email' => $email,
        'password' => $password
      );

      $this->model_admin->tambah_admin('admin', $data);
      redirect('admin/index');
    }
    else
    {
      $this->load->view('page_admin_tambah');
    }
  }

  function form_edit($id_admin)
  {
    $where = array('id_admin' => $id_admin);
    $data['admin'] = $this->model_admin->tampil_edit_admin('admin', $where);
    $this->load->view('page_admin_edit', $data);
  }

  function action_edit()
  {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() != FALSE)
    {
      $id_admin       = $this->input->post('id_admin');
      $nama_depan     = $this->input->post('nama_depan');
      $nama_belakang  = $this->input->post('nama_belakang');
      $email          = $this->input->post('email');
      $password       = $this->input->post('password');


      $data = array(
        'nama_depan' => $nama_depan,
        'nama_belakang' => $nama_belakang,
        'email' => $email,
        'password' => $password
      );

      $where = array('id_admin' => $id_admin);

      $this->model_admin->edit_admin('admin', $data, $where);
      // echo "<pre>";
      // print_r($this->db);
      // echo "</pre>";
      // die();
      redirect('admin/index');
    }
    else
    {
      $this->load->view('page_admin_edit');
    }
  }

  function action_hapus($id_admin)
  {
    $where = array('id_admin' => $id_admin);
    $this->model_admin->hapus_admin($where);
    redirect('admin/index');
  }

}
