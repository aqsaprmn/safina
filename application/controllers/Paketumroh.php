<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paketumroh extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Paket Umroh';
        $data['active'] = 'umroh';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('paketumroh');
        $this->load->view('template/footer');
    }
}
