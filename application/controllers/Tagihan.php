<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = 'Tagihan';

        $data['tampil']     = $this->db->query('select * from tb_pemasangan')->result_array();

        $this->template->load('template', 'backend/tagihan/data_tagihan', $data);
    }

    public function detail_tagihan($id){
        $data['title'] = 'Tagihan';

        $data['tampilResult']     = $this->db->query('select * from tb_pemasangan where id_pemasangan="'.$id.'"')->result_array();
        $data['tampilRow']     = $this->db->query('select * from tb_pemasangan where id_pemasangan="'.$id.'"')->row();

        $this->template->load('template', 'backend/tagihan/detail_tagihan', $data);
    }
}