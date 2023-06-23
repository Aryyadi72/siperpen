<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['id_level'] = $this->session->userdata('id_level');
		$title['title'] = "Dashboard - SIPERPEN";
		$dataCount['total'] = $this->M_buku->getTotalBuku();
		$dataCount['totalpetugas'] = $this->M_buku->getTotalPetugas();
		$dataCount['totalsantri'] = $this->M_buku->getTotalSantri();
		$dataCount['totalpeminjaman'] = $this->M_buku->getTotalPeminjaman();
		$dataCount['totalpengembalian'] = $this->M_buku->getTotalPengembalian();
		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('dashboard', $dataCount);
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
