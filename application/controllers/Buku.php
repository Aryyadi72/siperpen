<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$data['buku'] = $this->M_buku->tampil()->result();
		$title['title'] = "Data Buku - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/buku/v_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] = "Data Buku - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/buku/v_tambah_buku');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$no_invent 				= $this->input->post('no_invent');
		$tanggal_ditambahkan 	= $this->input->post('tanggal_ditambahkan');
		$pengarang 				= $this->input->post('pengarang');
		$judul 					= $this->input->post('judul');
		$id_asal_buku 			= $this->input->post('id_asal_buku');
		$id_jenis_buku 			= $this->input->post('id_jenis_buku');
		$bahasa					= $this->input->post('bahasa');
		$harga_satuan			= $this->input->post('harga_satuan');
		$jumlah_buku			= $this->input->post('jumlah_buku');
		$penerbit				= $this->input->post('penerbit');
		$keterangan				= $this->input->post('keterangan');

		$data = array(
			'no_invent' 			=> $no_invent,
			'tanggal_ditambahkan'	=> date('Y-m-d H:i:s'),
			'pengarang'				=> $pengarang,
			'judul' 				=> $judul,
			'id_asal_buku'			=> $id_asal_buku,
			'id_jenis_buku' 		=> $id_jenis_buku,
			'bahasa'				=> $bahasa,
			'harga_satuan' 			=> $harga_satuan,
			'jumlah_buku'			=> $jumlah_buku,
			'penerbit' 				=> $penerbit,
			'penerbit'				=> $penerbit,
			'keterangan'			=> $keterangan
        );
        
		$this->db->insert('buku', $data);
        redirect('buku');
	}

	public function edit($id)
	{
		$data['buku'] 	= $this->M_buku->byid($id);
		$title['title'] 	= "Ubah Buku - SPASI";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/buku/v_ubah_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		// $id 					= $this->input->post('id_buku');
		$no_invent 				= $this->input->post('no_invent');
		$pengarang 				= $this->input->post('pengarang');
		$judul 					= $this->input->post('judul');
		$id_asal_buku 			= $this->input->post('id_asal_buku');
		$id_jenis_buku 			= $this->input->post('id_jenis_buku');
		$bahasa					= $this->input->post('bahasa');
		$harga_satuan			= $this->input->post('harga_satuan');
		$jumlah_buku			= $this->input->post('jumlah_buku');
		$penerbit				= $this->input->post('penerbit');
		$keterangan				= $this->input->post('keterangan');

		$data = array(
			'no_invent' 			=> $no_invent,
			'pengarang'				=> $pengarang,
			'judul' 				=> $judul,
			'id_asal_buku'			=> $id_asal_buku,
			'id_jenis_buku' 		=> $id_jenis_buku,
			'bahasa'				=> $bahasa,
			'harga_satuan' 			=> $harga_satuan,
			'jumlah_buku'			=> $jumlah_buku,
			'penerbit' 				=> $penerbit,
			'penerbit'				=> $penerbit,
			'keterangan'			=> $keterangan
        );
        
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $data);
        redirect('buku');
	}

	public function detail($id)
	{
		$data['buku'] 	= $this->M_buku->byid($id);
		$title['title'] 	= "Ubah Buku - SPASI";

		$this->load->view('petugas/templates/header', $data);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/buku/v_detail_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_buku)
    {
		$this->M_buku->hapus($id_buku);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('buku'));
    }	
}