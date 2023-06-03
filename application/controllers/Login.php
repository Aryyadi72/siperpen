<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/login/v_login');
	}

	public function auth_petugas()
    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
    
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Username dan Password wajib diisi !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('login');
		} else {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek = $this->M_login->cek_login_petugas($username, $password);
		
		if (!$cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password salah !</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
		} else {
			$this->session->set_userdata('id_level', $cek->id_level);
			$this->session->set_userdata('username', $cek->username);
			$this->session->set_userdata('id_petugas', $cek->id_petugas);
		
				switch ($cek->id_level) {
					case 1:
						redirect('dashboard');
						break;
					case 2:
						redirect('dashboard');
						break;
					default:
						$this->session->unset_userdata('id_level');
						$this->session->unset_userdata('username');
						$this->session->unset_userdata('id_petugas');
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Anda tidak memiliki akses ke halaman ini !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>');
						redirect('login');
						break;
					}
        }
    }
}

	public function logout_petugas()
	{
		$this->session->sess_destroy();
		redirect('landing');
	}


	public function login_santri()
	{
		$this->load->view('santri/login/v_login_santri');
	}

	public function auth_santri()
    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
    
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Username dan Password wajib diisi !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('login/login_santri');
		} else {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek = $this->M_login->cek_login_santri($username, $password);
		
		if (!$cek) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password salah !</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login/login_santri');
		} else {
			$this->session->set_userdata('id_level', $cek->id_level);
			$this->session->set_userdata('username', $cek->username);
			$this->session->set_userdata('id_santri', $cek->id_santri);
		
				switch ($cek->id_level) {
					case 3:
						redirect('dashboard/dash_santri');
						break;
					default:
						$this->session->unset_userdata('id_level');
						$this->session->unset_userdata('username');
						$this->session->unset_userdata('id_santri');
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Anda tidak memiliki akses ke halaman ini !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>');
						redirect('login/login_santri');
						break;
					}
        }
    }
}

	public function logout_santri()
	{
		$this->session->sess_destroy();
		redirect('landing');
	}
}

