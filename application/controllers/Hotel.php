<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Hotel';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('hotel');
        $this->load->view('template/footer');
    }

    public function hotels()
    {
        $data['title'] = 'Hotel';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('hotels');
        $this->load->view('template/footer');
    }

    public function bukti()
    {
        $data['title'] = 'Bukti Booking Hotel';

        $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('bukti');
        $this->load->view('template/footer');
    }
}
