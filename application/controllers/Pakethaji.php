<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakethaji extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Paket Umroh';
        $data['active'] = 'haji';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('pakethaji');
        $this->load->view('template/footer');
    }
}
