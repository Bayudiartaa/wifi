<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemasangan_m extends CI_Model
{
    public function getPemasangan($id = null)
    {
        $this->db->select('*');
        $this->db->from('pemasangan');
        $this->db->join('pelanggan', 'pelanggan.id = pemasangan.id_pelanggan');
        if ($id != null) {
			$this->db->where('pemasangan.id', $id);
		}
        return $this->db->get();
    }
    function autofill($id){
        $query= $this->db->get_where('pelanggan',array('id'=>$id));
        return $query;
    }

    public function add($data){
        if(!empty($data))
			$this->db->insert('pemasangan', $data);
            return $this->db->insert_id();
    }

}