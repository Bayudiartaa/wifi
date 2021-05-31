<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pemasangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pemasangan_m', 'proses');
    }

    // public function index()
    // {
    //    $data['title'] = 'Pemasangan';
    //    $data['baru']    = $this->db->query('select count(*) as jumlah_baru from tb_pemasangan where status_pelanggan="1"')->row();
    //    $data['lama']    = $this->db->query('select count(*) as jumlah_lama from tb_pemasangan where status_pelanggan="2"')->row();
    //    $this->template->load('template', 'backend/pemasangan/data', $data);
    // }
 
    // public function pemasangan_baru(){
    //     $data['title']      = 'Pemasangan';
    //     $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "1"')->result_array();

    //     $this->template->load('template', 'backend/pemasangan/baru', $data);
    // }

    public function index(){
        $data['title']      = 'Pemasangan';
        $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "2"')->result_array();

        $this->template->load('template', 'backend/pemasangan/lama', $data);
    }

    public function tambah_pemasangan_baru(){
        $data['title'] = 'Tambah Pemasangan Baru';

        $this->template->load('template', 'backend/pemasangan/tambah_baru', $data);
    }

    public function add_pemasangan_baru(){
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
            'required'  => 'Nama Pelanggan tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
            'required'  => 'Nomor Telepon tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
            'required'  => 'Nomor KTP tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
            'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
            'required'  => 'Harga tidak boleh kosong !!'
        ));


        $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
            'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
        ));
        

        if($this->form_validation->run() == false){
            $data['title'] = 'Tambah Pemasangan Baru';
            $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "1"')->result_array();

            $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
                                                        Data Pelanggan gagal ditambahkan! 
                                                    </div>'
                                        );

            $this->template->load('template', 'backend/pemasangan/tambah_baru', $data);
        }else{
            $data = array(
                'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
                'no_tlp'            => $this->input->post('no_tlp'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
                'harga'             => $this->input->post('harga'),
                // 'bayar'             => $this->input->post('bayar'),
                'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
                'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
                'status_pelanggan'  => 1
            );
    
            $this->db->insert('tb_pemasangan',$data);
            $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil ditambahkan! 
                                                    </div>'
                                        );
            redirect('pemasangan_baru');
        }
    }

    public function edit_pemasangan_baru($id_pemasangan){
        $data['title']  = 'Tambah Pemasangan Baru';
        $data['tampil'] = $this->db->query('select * from tb_pemasangan where id_pemasangan = "'.$id_pemasangan.'"')->result_array();

        $this->template->load('template', 'backend/pemasangan/edit_baru', $data);
    }

    public function update_pemasangan_baru(){
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
            'required'  => 'Nama Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
            'required'  => 'Nomor Telepon tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
            'required'  => 'Nomor KTP tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
            'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
            'required'  => 'Harga tidak boleh kosong !!'
        ));

        // $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required', array(
        //     'required'  => 'Bayar tidak boleh kosong !!'
        // ));

        $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
            'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
        ));
        

        if($this->form_validation->run() == false){
            $data['title'] = 'Edit Pemasangan Baru';
            $data['tampil'] = $this->db->query('select * from tb_pemasangan where id_pemasangan = "'.$id_pemasangan.'"')->result_array();

            $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
                                                        Data Pelanggan gagal diubah! 
                                                    </div>'
                                        );

            $this->template->load('template', 'backend/pemasangan/edit_baru', $data);
        }else{
            $data = array(
                'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
                'no_tlp'            => $this->input->post('no_tlp'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
                'harga'             => $this->input->post('harga'),
                // 'bayar'             => $this->input->post('bayar'),
                'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
                'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
                'status_pelanggan'  => 1
            );

            $id_pemasangan = array('id_pemasangan' => $this->input->post('id_pemasangan'));
    
            $this->db->where($id_pemasangan);
            $this->db->update('tb_pemasangan',$data);
            $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil diubah! 
                                                    </div>'
                                        );
            redirect('pemasangan_baru');
        }
    }

    public function hapus_pemasangan_baru($id_pemasangan){
        $id = array('id_pemasangan' => $id_pemasangan);
        $this->db->where($id);
        $this->db->delete('tb_pemasangan');

        $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil dihapus! 
                                                    </div>'
                                        );
            redirect('pemasangan_baru');
    }

    public function autofill(){
        $nama_pelanggan = $_POST['pilih'];
        $auto           = $this->proses->autofill($nama_pelanggan)->result();
        echo json_encode($auto);
    }

    public function tambah_pemasangan_lama(){
        $data['title']  = 'Tambah Pemasangan Lama';
        $data['pelanggan'] = $this->db->query('select * from pelanggan')->result_array();

        $this->template->load('template', 'backend/pemasangan/tambah_lama', $data);
    }

    public function add_pemasangan_lama(){
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
            'required'  => 'Nama Pelanggan tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
            'required'  => 'Nomor Telepon tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
            'required'  => 'Nomor KTP tidak boleh kosong !!',
        ));

        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
            'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
            'required'  => 'Harga tidak boleh kosong !!'
        ));

        // $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required', array(
        //     'required'  => 'Bayar tidak boleh kosong !!'
        // ));

        $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
            'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
        ));
        

        if($this->form_validation->run() == false){
            $data['title'] = 'Tambah Pemasangan Lama';
            $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "2"')->result_array();

            $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
                                                        Data Pelanggan gagal ditambahkan! 
                                                    </div>'
                                        );

            $this->template->load('template', 'backend/pemasangan/tambah_lama', $data);
        }else{
            $data = array(
                'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
                'no_tlp'            => $this->input->post('no_tlp'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
                'harga'             => $this->input->post('harga'),
                // 'bayar'             => $this->input->post('bayar'),
                'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
                'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
                'status_pelanggan'  => 2
            );
    
            $this->db->insert('tb_pemasangan',$data);
            $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil ditambahkan! 
                                                    </div>'
                                        );
            redirect('pemasangan_lama');
        }
    }

    public function edit_pemasangan_lama($id_pemasangan){
        $data['title']  = 'Tambah Pemasangan Lama';
        $data['tampil'] = $this->db->query('select * from tb_pemasangan where id_pemasangan = "'.$id_pemasangan.'"')->result_array();

        $this->template->load('template', 'backend/pemasangan/edit_lama', $data);
    }

    public function update_pemasangan_lama(){
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required', array(
            'required'  => 'Nama Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required', array(
            'required'  => 'Nomor Telepon tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required', array(
            'required'  => 'Nomor KTP tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat Pelanggan', 'trim|required', array(
            'required'  => 'Alamat Pelanggan tidak boleh kosong !!'
        ));

        $this->form_validation->set_rules('harga', 'Harga', 'trim|required', array(
            'required'  => 'Harga tidak boleh kosong !!'
        ));

        // $this->form_validation->set_rules('bayar', 'Bayar', 'trim|required', array(
        //     'required'  => 'Bayar tidak boleh kosong !!'
        // ));

        $this->form_validation->set_rules('alamat_pemasangan', 'Alamat Pemasangan', 'trim|required', array(
            'required'  => 'Alamat Pemasangan tidak boleh kosong !!'
        ));
        

        if($this->form_validation->run() == false){
            $data['title'] = 'Edit Pemasangan Lama';
            $data['tampil']     = $this->db->query('select * from tb_pemasangan where status_pelanggan = "2"')->result_array();

            $this->session->set_flashdata('msg',    '<div class="alert alert-danger">
                                                        Data Pelanggan gagal diubah! 
                                                    </div>'
                                        );

            $this->template->load('template', 'backend/pemasangan/edit_lama', $data);
        }else{
            $data = array(
                'nama_pelanggan'    => $this->input->post('nama_pelanggan'),
                'no_tlp'            => $this->input->post('no_tlp'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'alamat_pelanggan'  => $this->input->post('alamat_pelanggan'),
                'harga'             => $this->input->post('harga'),
                // 'bayar'             => $this->input->post('bayar'),
                'tgl_pemasangan'    => $this->input->post('tgl_pemasangan'),
                'alamat_pemasangan' => $this->input->post('alamat_pemasangan'),
                'status_pelanggan'  => 2
            );

            $id_pemasangan = array('id_pemasangan' => $this->input->post('id_pemasangan'));
    
            $this->db->where($id_pemasangan);
            $this->db->update('tb_pemasangan',$data);
            $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil diubah! 
                                                    </div>'
                                        );
            redirect('pemasangan_lama');
        }
    }

    public function hapus_pemasangan_lama($id_pemasangan){
        $id = array('id_pemasangan' => $id_pemasangan);
        $this->db->where($id);
        $this->db->delete('tb_pemasangan');

        $this->session->set_flashdata('msg',    '<div class="alert alert-success">
                                                        Data Pelanggan berhasil dihapus! 
                                                    </div>'
                                        );
            redirect('pemasangan_lama');
    }

}