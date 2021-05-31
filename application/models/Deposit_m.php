<?php defined('BASEPATH') or exit('No direct script access allowed');

class Deposit_m extends CI_Model
{
    public function getDeposit($id = false)
    {
        $this->db->select('*');
        $this->db->from('deposit');
        $this->db->join('pelanggan', 'pelanggan.id = deposit.id_pelanggan');
        if ($id = null) {
			$this->db->where('id', $id);
		}
        $query = $this->db->get();
        return $query;
    }

    public function add()
    {
        $data = [
            'id_pelanggan' => $this->input->post('pelanggan',true),
            'jumlah_deposit' => $this->input->post('jumlah', true),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->username,
        ];

        $this->db->insert('deposit', $data);
    }

    public function edit()
    {
        $data = [
            'id_pelanggan' => $this->input->post('pelanggan', true),
            'jumlah_deposit' => $this->input->post('jumlah', true),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->username,
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('deposit', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('deposit');
    }
}