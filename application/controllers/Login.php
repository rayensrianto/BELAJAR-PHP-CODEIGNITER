<?php

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('model_login');
  }

  function index() {
    $this->load->view('login_form');
  }

  function login_action() {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    // echo $email;
    // echo $password;
    // die();
    $where = array(
      'email' => $email,
      'password' => $password
    );
    $cek = $this->model_login->cek_login('admin', $where)->num_rows();

      if ($cek > 0) {
      $data_session = array (
        'email' => $email,
        'status' => 'login'
      );

      $this->session->set_userdata($data_session);
      redirect(base_url('admin'));
    } else {
      echo "Login Failed";
    }
  }

  function logout() {
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }

}
