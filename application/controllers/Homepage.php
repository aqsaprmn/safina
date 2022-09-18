<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['active'] = 'home';

        $this->load->view('template/header', $data);
        $this->load->view('packages');
        $this->load->view('template/footer');
    }
}
