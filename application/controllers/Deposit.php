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

        $this->form_validation->set_rules('pelanggan', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Deposit', 'trim|required');

        if ($this->form_validation->run() == false) {
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
      $this->form_validation->set_rules('pelanggan', 'Nama', 'trim|required');
      $this->form_validation->set_rules('jumlah', 'Jumlah Deposit', 'trim|required');

      if ($this->form_validation->run() == false) {
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
          $this->Deposit_m->edit();
          $this->session->Set_flashdata('pesan', '<div class="alert alert-success">
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
        // var_dump($this->Deposit_m->delete($id));
        // die;
	}
}