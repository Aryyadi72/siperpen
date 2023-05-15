<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/santri/v_santri');
		$this->load->view('petugas/templates/footer');
	}
}