<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function index()
	{
		$data['peminjaman'] = $this->M_peminjaman->show_data()->result();

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/peminjaman/v_peminjaman', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah_peminjaman()
	{
		$data['data'] = $this->input->get('id');
		$this->load->view('santri/templates/header');
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/sidebar');
		$this->load->view('santri/peminjaman/v_peminjaman', $data);
		$this->load->view('santri/templates/footer');
	}

	public function proses_tambah()
	{
		$id_buku 					= $this->input->post('id_buku');
		$id_santri  				= $this->input->post('id_santri');
		$id_petugas  				= $this->input->post('id_petugas');
		$tanggal_peminjaman			= $this->input->post('tanggal_peminjaman');
		$tanggal_wajib_pengembalian	= $this->input->post('tanggal_wajib_pengembalian');
		$status						= $this->input->post('status');

		$data = array(
			'id_buku' 						=> $id_buku,
			'id_santri' 					=> $id_santri,
			'id_petugas' 					=> $id_petugas,
			'tanggal_peminjaman'			=> date('Y-m-d H:i:s'),
			'tanggal_wajib_pengembalian'	=> date('Y-m-d H:i:s'),
			'status'						=> $status,
        );
        
		$this->db->insert('peminjaman', $data);
        redirect('dashboard/dash_santri');
	}

	public function edit_peminjaman($id)
	{
		$data['peminjaman'] 	= $this->M_peminjaman->byid($id);

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/peminjaman/v_ubah_peminjaman', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$id_buku 					= $this->input->post('id_buku');
		$id_santri  				= $this->input->post('id_santri');
		$id_petugas  				= $this->input->post('id_petugas');
		$tanggal_peminjaman			= $this->input->post('tanggal_peminjaman');
		$tanggal_wajib_pengembalian	= $this->input->post('tanggal_wajib_pengembalian');
		$status						= $this->input->post('status');

		$data = array(
			'id_buku' 						=> $id_buku,
			'id_santri' 					=> $id_santri,
			'id_petugas' 					=> $id_petugas,
			'tanggal_peminjaman'			=> date('Y-m-d H:i:s'),
			'tanggal_wajib_pengembalian'	=> $tanggal_wajib_pengembalian,
			'status'						=> $status,
        );
        
		
		$this->db->where('id_peminjaman', $id);
		$this->db->update('peminjaman', $data);
        redirect('peminjaman');
	}
}