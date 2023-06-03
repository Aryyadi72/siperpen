<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function index()
	{
		$data['petugas'] = $this->M_petugas->tampil()->result();
		$title['title'] = "Data Petugas - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/petugas/v_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] = "Data Petugas - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/petugas/v_tambah_petugas');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$nama_petugas 		= $this->input->post('nama_petugas');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$id_level			= $this->input->post('id_level');
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');

		$data = array(
			'nama_petugas' 			=> $nama_petugas,
			'alamat' 				=> $alamat,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'no_hp'					=> $no_hp,
			'email'					=> $email,
        );

		$this->db->insert('petugas', $data);
		$insert_id = $this->db->insert_id();

		$data2 = array(
			'id_petugas' 	=> $insert_id,
			'id_level' 		=> $id_level,
			'username' 		=> $username,
			'password' 		=> md5($password),
		);

		$this->db->where('id_login_petugas', $insert_id);
		$this->db->insert('login_petugas', $data2);
        redirect('petugas');
	}

	public function edit($id)
	{
		$data['petugas'] 	= $this->M_petugas->byid($id);
		$title['title'] 	= "Ubah Petugas - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/petugas/v_ubah_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$nama_petugas 		= $this->input->post('nama_petugas');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');

		$data = array(
			'nama_petugas' 			=> $nama_petugas,
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
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $data);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/petugas/v_detail_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_petugas)
    {
		$this->M_petugas->hapus($id_petugas);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('petugas'));
    }

	public function detail_akun_petugas($id_petugas)
	{
		// $data['petugas'] 	= $this->M_petugas->akunbyid($id);
		$data['petugas'] = $this->M_petugas->getLoginPetugasById($id_petugas);
		$title['title'] 	= "Ubah petugas - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');
		$data['id_petugas'] = $this->uri->segment(3);

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/petugas/v_akun_petugas', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah_akun_petugas($id_petugas)
	{
		$username = $this->input->post('username');

		$data = array(
			'username' => $username,
        );
        
		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('login_petugas', $data);
        redirect('petugas');
	}
}