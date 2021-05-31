<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_m extends CI_Model{

    public function getPelanggan($id = null) {
		$this->db->from('pelanggan');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add() {
		$alamat = !empty($this->input->post('alamat', true)) ? $this->input->post('alamat', true) : '';
		$data = [
			'nama_pelanggan' => ucwords($this->input->post('nama', true)),
			'no_telepon' => $this->input->post('telp', true),
			'no_ktp' => $this->input->post('ktp', true),
			'alamat' => ucwords($alamat),
            'created_at' => date('Y-m-d H:i:s'),
			'created_by' => $this->session->username,
		];
		$this->db->insert('pelanggan', $data);
	}

	public function edit() {
		$data = [
			'nama_pelanggan' => ucwords($this->input->post('nama', true)),
			'no_telepon' => $this->input->post('telp', true),
			'no_ktp' => $this->input->post('ktp', true),
			'alamat' => ucwords($this->input->post('alamat', true)),
			'updated_at' => date('Y-m-d H:i:s'),
			'updated_by' => $this->session->username,           
		];
		$this->db->where('id', $this->input->post('id', true));
		$this->db->update('pelanggan', $data);
	}

	public function delete($id) {
		$this->db->delete('pelanggan', ['id' => $id]);
	}

}