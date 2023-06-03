<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$data['buku'] 		= $this->M_buku->tampil()->result();
		$title['title'] 	= "Data Buku - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/buku/v_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah()
	{
		$title['title'] 	= "Data Buku - SIPERPEN";
		$data['jenis'] 		= $this->M_buku->jenis_buku()->result();
		$data['asal'] 		= $this->M_buku->tampil_asal()->result();
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/buku/v_tambah_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah()
	{
		$config['upload_path']          = './assets/upload/buku';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Tambah";
        } else {

		$foto_buku 				= $this->upload->data();
        $foto_buku 				= $foto_buku['file_name'];
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
			'keterangan'			=> $keterangan,
			'foto_buku'				=> $foto_buku
        );
        
			$this->db->insert('buku', $data);
        	redirect('buku');
		}
	}

	public function edit($id)
	{
		$data['buku'] 		= $this->M_buku->byid($id);
		$title['title'] 	= "Ubah Buku - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/buku/v_ubah_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah($id)
	{
		$id 					= $this->input->post('id_buku');

		$config['upload_path']          = './assets/upload/buku';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {

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

        } else {

		$foto_buku 				= $this->upload->data();
        $foto_buku 				= $foto_buku['file_name'];
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
			'keterangan'			=> $keterangan,
			'foto_buku' 			=> $foto_buku,
        );
        
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $data);
        redirect('buku');
	}
}

	public function detail($id)
	{
		$data['buku'] 		= $this->M_buku->byid($id);
		$title['title'] 	= "Ubah Buku - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/buku/v_detail_buku', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function hapus($id_buku)
    {
		$this->M_buku->hapus($id_buku);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('buku'));
    }
	
	public function buku_santri()
	{
		$data['buku'] 	= $this->M_buku->tampil_jenis()->result();
		$title['title'] = "Data Buku - SIPERPEN";

		$this->load->view('santri/templates/header', $title);
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/sidebar');
		$this->load->view('santri/buku/v_buku_santri', $data);
		$this->load->view('santri/templates/footer');
	}

	public function detail_buku($id)
	{
		$data['buku'] 	= $this->M_buku->byid($id);
		$title['title'] = "Detail Buku - SPASI";

		$this->load->view('santri/templates/header', $data);
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/sidebar');
		$this->load->view('petugas/buku/v_detail_buku', $data);
		$this->load->view('santri/templates/footer');
	}

	// Jenis Buku

	public function tampil_jenis()
	{
		$data['jenis'] 	= $this->M_buku->jenis_buku()->result();
		$title['title'] = "Jenis Buku - SIPERPEN";
		$data['id_level'] = $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/jenis_buku/v_jenis', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah_jenis()
	{
		$title['title'] 	= "Tambah Jenis Buku - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/jenis_buku/v_tambah_jenis');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah_jenis()
	{
		$jenis = $this->input->post('jenis');

		$data = array(
			'jenis' => $jenis,
        );
        
		$this->db->insert('jenis_buku', $data);
        redirect('buku/tampil_jenis');
	}

	public function edit_jenis($id)
	{
		$data['jenis'] 		= $this->M_buku->jenis_byid($id);
		$title['title'] 	= "Ubah Jenis Buku - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/jenis_buku/v_ubah_jenis', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah_jenis($id)
	{
		$jenis = $this->input->post('jenis');

		$data = array(
			'jenis' => $jenis,
        );
        
		$this->db->where('id_jenis_buku', $id);
		$this->db->update('jenis_buku', $data);
        redirect('buku/tampil_jenis');
	}

	public function hapus_jenis($id_jenis_buku)
    {
		$this->M_buku->hapus_jenis($id_jenis_buku);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('buku/tampil_jenis'));
    }

	// Asal Buku

	public function tampil_asal()
	{
		$data['asal'] 		= $this->M_buku->tampil_asal()->result();
		$title['title'] 	= "Asal Buku - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/asal_buku/v_asal', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah_asal()
	{
		$title['title'] 	= "Tambah Asal Buku - SIPERPEN";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/asal_buku/v_tambah_asal');
		$this->load->view('petugas/templates/footer');
	}

	public function proses_tambah_asal()
	{
		$asal_buku = $this->input->post('asal_buku');

		$data = array(
			'asal_buku' => $asal_buku,
        );
        
		$this->db->insert('asal_buku', $data);
        redirect('buku/tampil_asal');
	}

	public function edit_asal($id)
	{
		$data['asal'] 		= $this->M_buku->asal_byid($id);
		$title['title'] 	= "Ubah Asal Buku - SPASI";
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header', $title);
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/asal_buku/v_ubah_asal', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function proses_ubah_asal($id)
	{
		$asal_buku = $this->input->post('asal_buku');

		$data = array(
			'asal_buku' => $asal_buku,
        );
        
		$this->db->where('id_asal_buku', $id);
		$this->db->update('asal_buku', $data);
        redirect('buku/tampil_asal');
	}

	public function hapus_asal($id_asal_buku)
    {
		$this->M_buku->hapus_asal($id_asal_buku);
        // $this->session->set_flashdata('sukses', 'Data Dengan ID ' . $id_user . ' berhasil dihapus.');
        redirect(base_url('buku/tampil_asal'));
    }
}