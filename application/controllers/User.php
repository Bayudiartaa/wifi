<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_m');
	}

	public function index() {
		$data = [
			'title' => 'Data Pengguna',
			'row' => $this->User_m->getUser(),
		];
		$this->template->load('template', 'user/data_user', $data);
	}

	public function add() {
		$data = [
			'title' => 'Tambah Pengguna Baru',
		];

		// set rule validasi form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password]');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[8]|matches[password]');

		// jalankan validasi form
		if ($this->form_validation->run() == false) {
			$this->template->load('template', 'user/add_user', $data);
		} else {
			// validasi form ok
			$this->User_m->add();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
				Data User berhasil ditambahkan! </div>');
			redirect('user');

		}
	}

	public function edit($id) {
		$data = [
			'title' => 'Edit Pengguna',
			
		];
		// set rule validasi form
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_username_check');
		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[8]|matches[password]');
		}
		if ($this->input->post('password2')) {
			$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[8]|matches[password]');
		}
		
		// jalankan validasi form
		if ($this->form_validation->run() == false) {
			$query = $this->User_m->getUser($id);
			// jika data yang di edit ditemukan
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'user/edit_user', $data);
			} else {
				// data tidak ditemukan
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
					Data User tidak ditemukan! </div>');
				redirect('user');

			}

		} else {
			// validasi form ok
			$result = $this->User_m->edit();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
				Data User berhasil diupdate! </div>');
			redirect('user');

		}
	}


	public function username_check() {
		// query untuk cek username
		$username = $this->input->post('username');
		$id = $this->input->post('id');
		// jika username yang di input sudah ada di database tapi idnya tidak sama dengan id yg di update
		$query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND id != '$id' ");

		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti!');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function delete() {
		$id = $this->input->post('id');
		$this->User_m->delete($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">
			Data User berhasil dihapus! </div>');
		redirect('user');
	}

}

