<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('petugas/templates/footer');
	}

	public function dash_santri()
	{
		$this->load->view('santri/templates/header');
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/sidebar');
		$this->load->view('santri/dashboard/dashboard_santri');
		$this->load->view('santri/templates/footer');
	}
}
