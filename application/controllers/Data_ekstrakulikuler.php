<?php

class Data_ekstrakulikuler extends CI_Controller {

  function __construct()
    {
      parent::__construct();
      $this->load->model('model_data_ekstrakulikuler');
      $this->load->model('model_ekstrakulikuler');
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
      $data['data_ekstrakulikuler'] = $this->model_data_ekstrakulikuler->tampil_data_ekstrakulikuler();
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      $this->load->view('page_data_eskul_tampil', $data);
    }

    function form_tambah()
    {
      $data['ekstrakulikulers'] = $this->model_ekstrakulikuler->tampil_ekstrakulikuler();
      $data['siswas'] = $this->model_siswa->tampil_siswa();
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      $this->load->view('page_data_eskul_tambah', $data);
    }

    function action_tambah()
    {
        $id_siswa            = $this->input->post('id_siswa');
        $id_ekstrakulikuler  = $this->input->post('id_ekstrakulikuler');

        $data = array(
          'id_siswa'            => $id_siswa,
          'id_ekstrakulikuler'  => $id_ekstrakulikuler
        );
        $this->model_data_ekstrakulikuler->tambah_data_ekstrakulikuler('data_ekstrakulikuler', $data);
        redirect('data_ekstrakulikuler/index');
    }

    function form_edit($id_siswa, $id_ekstrakulikuler)
    {
      $where = array(
        'siswa.id_siswa' => $id_siswa,
        'ekstrakulikuler.id_ekstrakulikuler' => $id_ekstrakulikuler
      );
      $data['data_ekstrakulikuler'] = $this->model_data_ekstrakulikuler->tampil_edit_data_ekstrakulikuler(
        'data_ekstrakulikuler', $where
      );
      $data['ekstrakulikulers'] = $this->model_ekstrakulikuler->tampil_ekstrakulikuler();
      $data['siswas'] = $this->model_siswa->tampil_siswa();
      $this->load->view('page_data_eskul_edit', $data);
    }

    function action_edit()
    {
      $id_siswa                  = $this->input->post('id_siswa');
      $id_ekstrakulikuler_before = $this->input->post('id_ekstrakulikuler_before');
      $id_ekstrakulikuler        = $this->input->post('id_ekstrakulikuler');

      // var_dump($id_ekstrakulikuler_before);
      // die();

      $data = array(
          'id_ekstrakulikuler' => $id_ekstrakulikuler
        );

      $where = array('id_siswa' => $id_siswa, 'id_ekstrakulikuler' => $id_ekstrakulikuler_before);

      $this->model_data_ekstrakulikuler->edit_data_ekstrakulikuler('data_ekstrakulikuler', $data, $where);
      redirect('data_ekstrakulikuler/index');
    }

    function action_hapus($id_siswa, $id_ekstrakulikuler)
    {
      $where = array('id_siswa' => $id_siswa, 'id_ekstrakulikuler' => $id_ekstrakulikuler);
      $this->model_data_ekstrakulikuler->hapus_data_ekstrakulikuler($where);
      redirect('data_ekstrakulikuler/index');
    }

}
