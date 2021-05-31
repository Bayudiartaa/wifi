<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_m extends CI_Model {

	public function get_data()
	{
		$this->db->join('pelanggan', 'pelanggan.id = pemasangan.id_pelanggan');
		$this->db->join('pemasangan', 'pemasangan.id = tagihan.id_pemasangan');
		$this->db->join('tagihan', 'tagihan.id = pembayaran.id_pemasangan');
		$this->db->order_by('pembayaran.id', 'asc');
		return $this->db->get('pembayaran');
	}	


	public function get_history($id)
	{
		$this->db->join('pelanggan', 'pelanggan.id = pemasangan.id_pelanggan');
		$this->db->join('kelas', 'pemasangan.id = tagihan.id_pemasangan');
		$this->db->join('tagihan', 'tagihan.id = pembayaran.id_pemasangan');
		$this->db->where('pembayaran.id', $id);
		return $this->db->get('pembayaran');
	}

	// public function get_one($id)
	// {
	// 	$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
	// 	$this->db->where('siswa.nisn', $id);
	// 	return $this->db->get('siswa');
	// }

	public function tambah($data)
	{
		return $this->db->insert('pembayaran', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('pembayaran',$data);
		return $update;
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete('pembayaran');
		return $hapus;

	}

	public function transaksi($data)
	{
		return $this->db->insert('pembayaran', $data);
	}



}
