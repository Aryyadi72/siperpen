<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function index()
	{
		$data['santri'] = $this->M_santri->tampil()->result();
		$title['title'] = "Data Santri - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/santri/v_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] = "Data Santri - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/santri/v_tambah_santri');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$config['upload_path']          = './assets/upload/santri';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {
		
		$foto_santri 		= $this->upload->data();
        $foto_santri 		= $foto_santri['file_name'];
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
		$id_level			= $this->input->post('id_level');
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');

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
			'tanggal_daftar'		=> date('Y-m-d H:i:s'),
			'foto_santri'			=> $foto_santri,
        );
        
		$this->db->insert('santri', $data);
		$insert_id = $this->db->insert_id();

		$data2 = array(
			'id_santri' => $insert_id,
			'id_level' 	=> $id_level,
			'username' 	=> $username,
			'password' 	=> md5($password),
		);

		$this->db->where('id_login_santri', $insert_id);
		$this->db->insert('login_santri', $data2);
        redirect('santri');
	}
}

	public function edit($id)
	{
		$data['santri'] 	= $this->M_santri->byid($id);
		$title['title'] 	= "Ubah Santri - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/santri/v_ubah_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$id = $this->input->post('id_santri');

		$config['upload_path']          = './assets/upload/santri';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {

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

		} else {

		$foto_santri 		= $this->upload->data();
        $foto_santri 		= $foto_santri['file_name'];
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
			'tanggal_daftar'		=> date('Y-m-d H:i:s'),
			'foto_santri'			=> $foto_santri,
        );
        
		$this->db->where('id_santri', $id);
		$this->db->update('santri', $data);
        redirect('santri');
	}
}

	public function detail($id)
	{
		$data['santri'] 	= $this->M_santri->byid($id);
		$title['title'] 	= "Ubah Santri - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/santri/v_detail_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_santri)
    {
		$this->M_santri->hapus($id_santri);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('santri'));
    }

	public function detail_akun_santri($id_santri)
	{
		// $data['santri'] 	= $this->M_santri->akunbyid($id);
		$data['santri'] = $this->M_santri->getLoginSantriById($id_santri);
		$title['title'] 	= "Ubah Santri - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');
		$data['id_santri'] = $this->uri->segment(3);

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/santri/v_akun_santri', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah_akun_santri($id_santri)
	{
		$username = $this->input->post('username');

		$data = array(
			'username' => $username,
        );
        
		$this->db->where('id_santri', $id_santri);
		$this->db->update('login_santri', $data);
        redirect('santri');
	}
}