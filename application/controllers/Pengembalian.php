<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	public function index()
	{
		$data['id_level'] 	= $this->session->userdata('id_level');
		$data['pengembalian'] = $this->M_pengembalian->tampil()->result();

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/pengembalian/v_pengembalian', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah_pengembalian()
	{
		$data['id_level'] 	= $this->session->userdata('id_level');
		$data['data'] 		= $this->input->get('id');

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/pengembalian/v_tambah_pengembalian');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$id_peminjaman 			= $this->input->post('id_peminjaman');
		$tanggal_dikembalikan 	= $this->input->post('tanggal_dikembalikan');

		$tanggal_peminjaman = $this->db->get_where('peminjaman', array('id_peminjaman' => $id_peminjaman))->row()->tanggal_wajib_pengembalian; // Tanggal peminjaman

		$date1 = new DateTime($tanggal_peminjaman);
    	$date2 = new DateTime($tanggal_dikembalikan);

		$diff = date_diff($date1, $date2);
		$days = $diff->format('%a'); // Mengambil selisih dalam bentuk hari

		$denda = $days * 200;

		$data = array(
			'id_peminjaman'			=> $id_peminjaman,
			'tanggal_dikembalikan' 	=> $tanggal_dikembalikan,
			'keterangan' 			=> $denda,
        );

		$this->db->insert('pengembalian', $data);

		$id_buku = $this->db->get_where('peminjaman', array('id_peminjaman' => $id_peminjaman))->row()->id_buku;
		$jumlah_buku_saat_ini = $this->db->get_where('buku', array('id_buku' => $id_buku))->row()->jumlah_buku;
		$jumlah_buku_baru = $jumlah_buku_saat_ini + 1;
		$this->db->where('id_buku', $id_buku);
		$this->db->update('buku', array('jumlah_buku' => $jumlah_buku_baru));

		$status = $this->db->get_where('peminjaman', array('id_peminjaman' => $id_peminjaman))->row()->status;
		$status_baru = "selesai";
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->update('peminjaman', array('status' => $status_baru));

        redirect('pengembalian');
	}
}