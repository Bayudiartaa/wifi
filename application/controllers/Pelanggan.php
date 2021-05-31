<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Pelanggan_m');
	}

	public function index() {
		$data = [
			'title' => 'Data Pelanggan',
			'row' => $this->Pelanggan_m->getPelanggan(),
		];
		$this->template->load('template', 'pelanggan/data_pelanggan', $data);
	}

	public function add() {
		$data = [
			'title' => 'Data Pelanggan',
		];

		if ($this->form_validation->run('pelanggan.add') == false) {
			// jika validasi form gagal
			$this->template->load('template', 'pelanggan/add_pelanggan', $data);
		} else {
			// validasi form sukses
			$this->Pelanggan_m->add();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
				Data Pelanggan berhasil ditambahkan! </div>');
			redirect('pelanggan');
		}
	}


	public function edit($id) {
		$data = [
			'title' => 'Data Pelanggan',
		];

		if ($this->form_validation->run('pelanggan.edit') == false) {
			// jika validasi form gagal
			$query = $this->Pelanggan_m->getPelanggan($id);
			// jika data yang di edit ditemukan
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'pelanggan/edit_pelanggan', $data);
			} else {
				// tidak ada data
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
					Data Pelanggan tidak ditemukan! </div>');
				redirect('pelanggan');
			}
		} else {
			// validasi form sukses
			$this->Pelanggan_m->edit();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
				Data Pelanggan berhasil diupdate! </div>');
			redirect('pelanggan');
		}
	}

	public function no_ktp_check() {
		$no_ktp = $this->input->post('ktp');
		$id = $this->input->post('id');

		// jika nama_pelanggan yang di input sudah ada di database tapi idnya tidak sama dengan id yg di update
		$query = $this->db->query("SELECT * FROM pelanggan WHERE no_ktp = '$ktp' AND id != '$id' ");

		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('no_ktp_check', '{field} ini sudah dipakai, silahkan ganti!');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function delete() {
        $id = $this->input->post('id');
		$this->Pelanggan_m->delete($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">
			Data Pelanggan berhasil dihapus! </div>');
		redirect('pelanggan');
	}

}
