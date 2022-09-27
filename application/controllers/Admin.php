<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_all');
    }

    public function index()
    {
        // $data = [
        //     'username' => 'admin',
        //     'email' => 'safina@admin.com',
        //     'password' => password_hash('adminsafina', PASSWORD_DEFAULT),
        //     'role_id' => 'ADM'
        // ];

        // $this->M_all->insertData('us_user', $data);
        // $this->load->view('admin/header');
        $this->load->view('admin/login');
        // $this->load->view('admin/footer');
    }

    public function login()
    {
    }

    public function admindashboard()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function visaList()
    {

        $data['list'] = $this->M_all->getDataAll('v_vs_datall');
        $data['title'] = 'List Visa Registration';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/visaList', $data);
        $this->load->view('admin/footer');
    }


    public function userList()
    {

        $data['list'] = $this->M_all->getDataAll('v_vs_datall');
        $data['title'] = 'List Visa Registration';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/userList', $data);
        $this->load->view('admin/footer');
    }

    public function logout()
    {
        redirect('admin');
    }
}
