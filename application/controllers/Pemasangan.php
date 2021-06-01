<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemasangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pemasangan_m');
        $this->load->model('Pelanggan_m');
    }

    public function index()
    {
        $data['title'] = 'Data Pemasangan';
		$data['pemasangan'] = $this->Pemasangan_m->getPemasangan();
        $this->template->load('template', 'pemasangan/data_pemasangan', $data);
    }


    public function add_pemasangan()
    {
        $data['title'] =  'Pemasangan';
        $data['pemasangan'] = $this->Pemasangan_m->getPemasangan();
		// $data['pelanggan'] = $this->Pelanggan_m->getPelanggan()->result();

      if($this->form_validation->run('pemasangan.add_pemasangan') == false){
        $this->template->load('template', 'pemasangan/add_pemasangan', $data);
         $this->session->set_flashdata('pesan', '<div class="alert alert-danger">
                Data Pemasangan gagal ditambahkan! </div>');
            // $this->template->load('template', 'pemasangan/add_pemasangan', $data);
        }else{
            $nama_pelanggan = $this->input->post('nama_pelanggan');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $alamat = $this->input->post('alamat');

            $data_pelanggan = array(
                    'nama_pelanggan'=>$nama_pelanggan,
                    'no_telepon'=>$no_telepon,
                    'no_ktp'=>$no_ktp,
                    'alamat'=>$alamat,
            );
            $id_pelanggan = $this->Pelanggan_m->add($data_pelanggan);
        
            $tarif = $this->input->post('tarif');
            $tanggal_pemasangan = $this->input->post('tanggal_pemasangan');
            $alamat_pemasangan = $this->input->post('alamat_pemasangan');
        
            $data_pemasangan = array(
                    'tarif'=>$tarif,
                    'tanggal_pemasangan'=>$tanggal_pemasangan,
                    'alamat_pemasangan'=>$alamat_pemasangan,
                    'id_pelanggan' => $id_pelanggan
            );
            $this->session->set_flashdata('pesan','<div class="alert alert-success">
                                Data Pemasangan berhasil diubah! </div>'
            );
        
            redirect('pemasangan');
        }
    }


    public function autofill(){
        $nama_pelanggan = $_POST['pilih'];
        $auto           = $this->proses->autofill($nama_pelanggan)->result();
        echo json_encode($auto);
    }

    // public function tambah_pemasangan_lama(){
    //     $data['title']  = 'Tambah Pemasangan Lama';
    //     $data['pelanggan'] = $this->db->query('select * from pelanggan')->result_array();

    //     $this->template->load('template', 'backend/pemasangan/tambah_lama', $data);
    // }

    // public function add_pemasangan_lama(){
    //     $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
    //         'required'  => 'Nama Pelanggan tidak boleh kosong !!',
    //     ));

    //     $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
    //         'required'  => 'Nomor Telepon tidak boleh kosong !!',
    //     ));

    //     $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
    //         'required'  => 'Nomor KTP tidak boleh kosong !!',
    //     ));

    //     $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
    //         'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
    //     ));

    //     $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
    //         'required'  => 'Harga tidak boleh kosong !!'
    //     ));

    //     // $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required', array(
    //     //     'required'  => 'Bayar tidak boleh kosong !!'
    //     // ));

    //     $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
    //         'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
    //     ));
        

    //     if($this->form_validation->run() == false){
    //         $data['title'] = 'Tambah Pemasangan Lama';
    //         $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "2"')->result_array();

    //         $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
    //                                                     Data Pelanggan gagal ditambahkan! 
    //                                                 </div>'
    //                                     );

    //         $this->template->load('template', 'backend/pemasangan/tambah_lama', $data);
    //     }else{
    //         $data = array(
    //             'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
    //             'no_tlp'            => $this->input->post('no_tlp'),
    //             'no_ktp'            => $this->input->post('no_ktp'),
    //             'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
    //             'harga'             => $this->input->post('harga'),
    //             // 'bayar'             => $this->input->post('bayar'),
    //             'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
    //             'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
    //             'status_pelanggan'  => 2
    //         );
    
    //         $this->db->insert('tb_pemasangan',$data);
    //         $this->session->set_flashdata('msg',    '<div class="alert alert-success">
    //                                                     Data Pelanggan berhasil ditambahkan! 
    //                                                 </div>'
    //                                     );
    //         redirect('pemasangan_lama');
    //     }
    // }

    // public function edit_pemasangan_lama($id_pemasangan){
    //     $data['title']  = 'Tambah Pemasangan Lama';
    //     $data['tampil'] = $this->db->query('select * from tb_pemasangan where id_pemasangan = "'.$id_pemasangan.'"')->result_array();

    //     $this->template->load('template', 'backend/pemasangan/edit_lama', $data);
    // }

    // public function update_pemasangan_lama(){
    //     $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
    //         'required'  => 'Nama Pelanggan tidak boleh kosong !!'
    //     ));

    //     $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
    //         'required'  => 'Nomor Telepon tidak boleh kosong !!'
    //     ));

    //     $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
    //         'required'  => 'Nomor KTP tidak boleh kosong !!'
    //     ));

    //     $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
    //         'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
    //     ));

    //     $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
    //         'required'  => 'Harga tidak boleh kosong !!'
    //     ));

    //     // $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required', array(
    //     //     'required'  => 'Bayar tidak boleh kosong !!'
    //     // ));

    //     $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
    //         'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
    //     ));
        

    //     if($this->form_validation->run() == false){
    //         $data['title'] = 'Edit Pemasangan Lama';
    //         $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "2"')->result_array();

    //         $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
    //                                                     Data Pelanggan gagal diubah! 
    //                                                 </div>'
    //                                     );

    //         $this->template->load('template', 'backend/pemasangan/edit_lama', $data);
    //     }else{
    //         $data = array(
    //             'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
    //             'no_tlp'            => $this->input->post('no_tlp'),
    //             'no_ktp'            => $this->input->post('no_ktp'),
    //             'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
    //             'harga'             => $this->input->post('harga'),
    //             // 'bayar'             => $this->input->post('bayar'),
    //             'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
    //             'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
    //             'status_pelanggan'  => 2
    //         );

    //         $id_pemasangan = array('id_pemasangan' => $this->input->post('id_pemasangan'));
    
    //         $this->db->where($id_pemasangan);
    //         $this->db->update('tb_pemasangan',$data);
    //         $this->session->set_flashdata('msg',    '<div class="alert alert-success">
    //                                                     Data Pelanggan berhasil diubah! 
    //                                                 </div>'
    //                                     );
    //         redirect('pemasangan_lama');
    //     }
    // }

    // public function hapus_pemasangan_lama($id_pemasangan){
    //     $id = array('id_pemasangan' => $id_pemasangan);
    //     $this->db->where($id);
    //     $this->db->delete('tb_pemasangan');

    //     $this->session->set_flashdata('msg',    '<div class="alert alert-success">
    //                                                     Data Pelanggan berhasil dihapus! 
    //                                                 </div>'
    //                                     );
    //         redirect('pemasangan_lama');
    // }

}