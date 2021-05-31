<?php

class Pemasangan_m extends CI_Model{
     
    function autofill($id){
        $query= $this->db->get_where('pelanggan',array('id'=>$id));
        return $query;
    }

    public function add(){
        if(!empty($data))
			$this->db->insert('pemasangan', $data);
			return $this->db->insert_id();
    }
}
?>
