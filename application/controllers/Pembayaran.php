<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Deposit_m', 'Pelanggan_m', 'Pemasangan_m']);
    }


	public function index()
	{
		$id_pemasangan = $this->input->get('cari');
		$data['title'] = 'Pembayaran';
		// $data['data_pembayaran'] = $this->M_tunggakan->get_data()->result(); 
		$data['pembayaran'] = $this->Pembayaran_m->get_one($id_pemasangan)->row();
        $this->template->load('template', 'pembayaran/data_pembayaran', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Pembayaran';
        $this->template->load('template', 'pembayaran/tambah_pembayaran', $data);
	}

	public function store()
	{
		$id_pemasangan = $this->input->post('id_pemasangan');
		$id_tagihan = $this->input->post('id_tagihan');

		$data = array(
			'id_pemasangan' => $id_pemasangan, 
			'id_tagihan' => $id_tagihan, 
		);

		$tambah = $this->Pembayaran_m->tambah($data);

		if ($tambah > 0) {
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
		}

		redirect('pembayaran');
	}

	public function hapus($id)
	{
		$this->Pembayaran_m->hapus($id);
		redirect('pembayaran');
	}

	public function detail($id)
	{
		$data['detail'] = $this->Pembayaran_m->get_one($id)->row();
		$data['tagihan'] = $this->Pembayaran_m->get_data()->result();
		$data['title'] = 'Tambah Pembayaran';
        $this->template->load('template', 'pembayaran/tambah_pembayaran', $data);
	}

	public function add()
	{
		$bayar = $_POST['bayar'];	
		$tanggal_bayar = $_POST['tanggal_bayar'];	
		$pembayaran = array(
			'bayar' => $bayar, 
			'tanggal_bayar' => $tanggal_bayar, 
		); 
		$tambah = $this->Pembayaran_m->transaksi($pembayaran);

		if ($tambah > 0) {
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
		}
		redirect('pembayaran');
	}

	public function history($id)
	{
		$data['history'] = $this->Pembayaran_m->get_one($id)->result();
		$data['title'] = 'History Pembayaran';
        $this->template->load('template', 'pembayaran/history', $data);
	}

	public function history_pembayaran()
	{
		$data['data_history'] = $this->Pembayaran_m->get_data()->result();
		$data['title'] = 'History Pembayaran';
        $this->template->load('template', 'pembayaran/history_pembayaran', $data);
	}

}