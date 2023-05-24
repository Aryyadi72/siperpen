<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$data['petugas'] = $this->M_petugas->tampil()->result();
		$title['title'] = "Data Petugas - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/petugas/v_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] = "Data Petugas - SIPERPEN";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/petugas/v_tambah_petugas');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$nama 				= $this->input->post('nama');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');

		$data = array(
			'nama' 					=> $nama,
			'alamat' 				=> $alamat,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'no_hp'					=> $no_hp,
			'email'					=> $email,
        );
        
		$this->db->insert('petugas', $data);
        redirect('petugas');
	}

	public function edit($id)
	{
		$data['petugas'] 	= $this->M_petugas->byid($id);
		$title['title'] 	= "Ubah Petugas - SPASI";

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/petugas/v_ubah_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$nama 				= $this->input->post('nama');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');

		$data = array(
			'nama' 					=> $nama,
			'alamat' 				=> $alamat,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'no_hp'					=> $no_hp,
			'email'					=> $email,
		);
        
		$this->db->where('id_petugas', $id);
		$this->db->update('petugas', $data);
        redirect('petugas');
	}

	public function detail($id)
	{
		$data['petugas'] 	= $this->M_petugas->byid($id);
		$title['title'] 	= "Ubah Petugas - SPASI";

		$this->load->view('petugas/templates/header', $data);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar');
		$this->load->view('petugas/petugas/v_detail_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_petugas)
    {
		$this->M_petugas->hapus($id_petugas);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('petugas'));
    }
}