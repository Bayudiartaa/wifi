<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Pelanggan_m', 'User_m', 'Deposit_m']);

    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->User_m->getUser();
        $data['pelanggan'] = $this->Pelanggan_m->getPelanggan();
        $data['deposit'] = $this->Deposit_m->getDeposit();
        $this->template->load('template', 'dashboard/index', $data);
       
    }
}
