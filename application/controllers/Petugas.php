<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/petugas/v_petugas');
		$this->load->view('petugas/templates/footer');
	}
}