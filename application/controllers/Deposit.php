<?php defined('BASEPATH') or exit('No direct script access allowed');

class Deposit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Deposit_m', 'Pelanggan_m']);
    }

    public function index()
    {
        $data['title'] = 'Data Deposit';
		$data['deposit'] = $this->Deposit_m->getDeposit();
        $this->template->load('template', 'deposit/data_deposit', $data);
    }

    public function add()
    {
        $data['title'] =  'Tambah Deposit';
        $data['deposit'] = $this->Deposit_m->getDeposit();
		$data['pelanggan'] = $this->Pelanggan_m->getPelanggan()->result();

        if ($this->form_validation->run('deposit.add') == false) {
            $this->template->load('template', 'deposit/add_deposit', $data);
        } else { 
            $this->Deposit_m->add();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                 Data Deposit berhasil ditambahkan! </div>');
            redirect('deposit');     
        }
        
    }


    public function edit($id) {
      $data = [
          'title' => 'Data Deposit',
      ];

      if ($this->form_validation->run('deposit.edit') == false) {
          $query = $this->Deposit_m->getDeposit($id);

          if ($query->num_rows() > 0) {
              $data['row'] = $query->row();
              $data['pelanggan'] = $this->Pelanggan_m->getPelanggan()->result();
          $this->template->load('template', 'deposit/edit_deposit', $data);
      } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning">
              Data Deposit tidak ditemukan! </div>');
          redirect('deposit');  
         }   
      } else {
            $data = [
                'id' => $id,
                'id_pelanggan' => $this->input->post('pelanggan', true),
                'jumlah_deposit' => $this->input->post('jumlah', true),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => $this->session->username,
            ];
            
            $this->Deposit_m->edit($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">
                Data Deposit berhasil diupdate! </div>');
            redirect('deposit');
      }
    }

	public function delete() {
        $id = $this->input->post('id');
		$this->Deposit_m->delete($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">
			Data Deposit berhasil dihapus! </div>');
		redirect('deposit');
	}
}