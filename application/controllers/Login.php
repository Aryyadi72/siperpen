<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/login/v_login');
	}

	public function login_santri()
	{
		$this->load->view('santri/login/v_login_santri');
	}
}
