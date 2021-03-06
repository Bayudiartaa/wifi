<?php defined('BASEPATH') or exit('No direct script access allowed');

class Deposit_m extends CI_Model
{
    public function getDeposit($id = null)
    {
        $this->db->select('
            deposit.id as id_deposit,
            deposit.jumlah_deposit,
            deposit.created_at,
            deposit.id_pelanggan,
            pelanggan.nama_pelanggan,
        ');
        $this->db->from('deposit');
        $this->db->join('pelanggan', 'pelanggan.id = deposit.id_pelanggan');
        if ($id != null) {
			$this->db->where('deposit.id', $id);
		}
        return $this->db->get();
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

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('deposit', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('deposit');
    }
}