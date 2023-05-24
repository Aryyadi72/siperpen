<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function index()
	{
		$data['santri'] = $this->M_santri->tampil()->result();
		$title['title'] = "Data Santri - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/santri/v_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] = "Data Santri - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/santri/v_tambah_santri');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$no_anggota 		= $this->input->post('no_anggota');
		$bin_binti 			= $this->input->post('bin_binti');
		$nama 				= $this->input->post('nama');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$ttl				= $this->input->post('ttl');
		$madrasah			= $this->input->post('madrasah');
		$alamat_sekarang	= $this->input->post('alamat_sekarang');
		$tanggal_daftar		= $this->input->post('tanggal_daftar');

		$data = array(
			'no_anggota' 			=> $no_anggota,
			'bin_binti'				=> $bin_binti,
			'nama' 					=> $nama,
			'alamat' 				=> $alamat,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'no_hp'					=> $no_hp,
			'email'					=> $email,
			'ttl' 					=> date('Y-m-d H:i:s'),
			'madrasah'				=> $madrasah,
			'alamat_sekarang'		=> $alamat_sekarang,
			'tanggal_daftar'		=> date('Y-m-d H:i:s')
        );
        
		$this->db->insert('santri', $data);
        redirect('santri');
	}

	public function edit($id)
	{
		$data['santri'] 	= $this->M_santri->byid($id);
		$title['title'] 	= "Ubah Santri - SPASI";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/santri/v_ubah_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$no_anggota 		= $this->input->post('no_anggota');
		$bin_binti 			= $this->input->post('bin_binti');
		$nama 				= $this->input->post('nama');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$ttl				= $this->input->post('ttl');
		$madrasah			= $this->input->post('madrasah');
		$alamat_sekarang	= $this->input->post('alamat_sekarang');
		$tanggal_daftar		= $this->input->post('tanggal_daftar');

		$data = array(
			'no_anggota' 			=> $no_anggota,
			'bin_binti'				=> $bin_binti,
			'nama' 					=> $nama,
			'alamat' 				=> $alamat,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'no_hp'					=> $no_hp,
			'email'					=> $email,
			'ttl' 					=> date('Y-m-d H:i:s'),
			'madrasah'				=> $madrasah,
			'alamat_sekarang'		=> $alamat_sekarang,
			'tanggal_daftar'		=> date('Y-m-d H:i:s')
		);
        
		$this->db->where('id_santri', $id);
		$this->db->update('santri', $data);
        redirect('santri');
	}

	public function detail($id)
	{
		$data['santri'] 	= $this->M_santri->byid($id);
		$title['title'] 	= "Ubah Santri - SPASI";

		$this->load->view('petugas/templates/header', $data);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/santri/v_detail_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_santri)
    {
		$this->M_santri->hapus($id_santri);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('santri'));
    }
}