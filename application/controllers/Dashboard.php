<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['id_level'] = $this->session->userdata('id_level');
		$title['title'] = "Dashboard - SIPERPEN";
		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('dashboard');
		$this->load->view('petugas/templates/footer');
	}

	public function dash_santri()
	{
		$title['title'] = "Dashboard - SIPERPEN";
		$this->load->view('santri/templates/header', $title);
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/sidebar');
		$this->load->view('santri/dashboard/dashboard_santri');
		$this->load->view('santri/templates/footer');
	}

	// public function dash_admin()
	// {
	// 	$title['title'] = "Dashboard - SIPERPEN";
	// 	$this->load->view('petugas/templates/header', $title);
	// 	$this->load->view('petugas/templates/navbar');
	// 	$this->load->view('petugas/templates/adm_sidebar');
	// 	$this->load->view('dashboard');
	// 	$this->load->view('petugas/templates/footer');
	// }
}
