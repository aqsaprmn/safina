<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Tiket';
        $data['active'] = 'tiket';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('tiket');
        $this->load->view('template/footer');
    }
}
