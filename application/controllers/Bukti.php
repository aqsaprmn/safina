<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_visa');
    }

    public function visa()
    {
        $data['title'] = 'Bukti Booking Hotel';
        $data['active'] = 'hotel';

        $namePersonal = $this->session->userdata('name');
        $noPass = $this->session->userdata('pass_no');

        $data['vsPersonal'] = $this->M_visa->getVisaW('vs_personal', ['name' => $namePersonal]);

        $data['vsPassport'] = $this->M_visa->getVisaW('vs_passport', ['pass_no' => $noPass]);

        $this->load->view('template/header', $data);
        $this->load->view('bukti', $data);
        $this->load->view('template/footer');
    }
}
