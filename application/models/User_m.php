<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($username) {
		$query = $this->db->get_where('user', ['username' => $username]);
		return $query; // mengembalikan data objek
	}

	public function getUser($id = null) {
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('id', $id);
			$this->db->or_where('username', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add() {
		$password = $this->input->post('password', true);
		$data = [
			'username' => $this->input->post('username', true),
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => $this->session->username,
		];
		$this->db->insert('user', $data);
	}

	public function edit() {
		$data['nama'] = $this->input->post('nama', true);
		if (!empty($this->input->post('password2', true))) {
			$data['password'] = password_hash($this->input->post('password2', true), PASSWORD_DEFAULT);
		}
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['updated_by'] = $this->session->username;

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function delete($id) {
		$this->db->delete('user', ['id' => $id]);
	}

}

