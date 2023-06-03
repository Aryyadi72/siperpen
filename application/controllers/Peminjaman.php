<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function index()
	{
		$data['peminjaman'] = $this->M_peminjaman->show_data()->result();
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
		$this->load->view('petugas/peminjaman/v_peminjaman', $data);
		$this->load->view('petugas/templates/footer');
	}

	public function tambah_peminjaman()
	{
		$data['data'] 		= $this->input->get('id');
		$data['id_santri'] 	= $this->session->userdata('id_santri');

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
			'tanggal_wajib_pengembalian'	=> $tanggal_wajib_pengembalian,
			'status'						=> $status,
        );
        
		$this->db->insert('peminjaman', $data);
        redirect('dashboard/dash_santri');
	}

	public function edit_peminjaman($id)
	{
		$data['peminjaman'] 	= $this->M_peminjaman->byid($id);
		$data['id_petugas'] = $this->session->userdata('id_petugas');
		$data['id_level'] 	= $this->session->userdata('id_level');

		$this->load->view('petugas/templates/header');
		$this->load->view('petugas/templates/navbar');
		$this->load->view('petugas/templates/sidebar', $data);
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

		$query = $this->db->get_where('peminjaman', array('id_peminjaman' => $id));
		$previousData = $query->row();
		$previousBukuId = $previousData->id_buku;

		$currentJumlahBuku = $this->db->get_where('buku', array('id_buku' => $previousBukuId))->row()->jumlah_buku;
		$newJumlahBuku = $currentJumlahBuku - 1;

		$this->db->where('id_buku', $previousBukuId);
		$this->db->update('buku', array('jumlah_buku' => $newJumlahBuku));

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

		$this->load->library('email');

		$penerima = $this->db->get_where('santri', array('id_santri' => $id_santri))->row()->email;

		$this->email->from('dlcindonesia07@gmail.com', 'Petugas');
		$this->email->to('aryyadisetiawan002@gmail.com');
		$this->email->subject('Email Subject');
		$this->email->message('Email body content');

		if ($this->email->send()) {
			echo 'Email sent successfully.';
		} else {
			echo 'Email sending failed.';
		}

        redirect('peminjaman');
	}
}