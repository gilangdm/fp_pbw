<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('MyModel');
  }

	public function index()
	{
		$this->load->view('login');
	}

  public function cek_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $isLogin = $this->MyModel->authentication($username, $password);

    if ($isLogin == true) {
        $this->session->set_userdata('username', $username);
        redirect('Ctrl_admin/index');
    }
    else{
        redirect('admin');
    }
  }
}
