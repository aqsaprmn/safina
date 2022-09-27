<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_visa');
        $this->load->model('M_all');
    }

    public function index()
    {
        $data['title'] = 'Visa Umrah';
        $data['active'] = 'visa';

        // $data['script'] = "<script src='" . base_url() . "asset/js/script.js'></script>";

        $this->load->view('template/header', $data);
        $this->load->view('visa');
        $this->load->view('template/footer');
    }

    public function submit()
    {

        // Data Pribadi
        $name = htmlspecialchars(trim($this->input->post('nama', true)));
        $sex = $this->input->post('sex', true);
        $pob = htmlspecialchars(trim($this->input->post('pob', true)));
        $dob = $this->input->post('dob', true);
        $noiden = htmlspecialchars(trim($this->input->post('noiden', true)));
        $email = htmlspecialchars(trim($this->input->post('email', true)));
        $hp = htmlspecialchars(trim($this->input->post('hp', true)));
        $grup = $this->input->post('grup', true);

        $prefix = $this->M_all->getDataW('no_prefix', ['prefix_cd' => 'VSA']);
        $prefixNo = str_split($prefix['numb']);

        $prefixNo = array_reverse($prefixNo);

        // for ($i = 0; $i < count($prefixNo); $i++) {
        //     if ($prefixNo[$i] > 0) {
        //         $updateNo = (int)$prefixNo[$i] + 1;
        //     } else {

        //     }
        // }

        $dataPersonal = [
            "reg_id" => 'VS' . '-' . date('dmy'),
            "name" => $name,
            "sex" => $sex,
            "pob" => $pob,
            "dob" => $dob,
            "identity_no" => $noiden,
            "email" => $email,
            "hp" => $hp,
            "grup" => $grup
        ];

        // var_dump($dataPersonal, $prefix, $prefixNo);
        // die;

        // Data Passpor
        $nopass = htmlspecialchars(trim($this->input->post('nopass', true)));
        $nationality = htmlspecialchars(trim($this->input->post('negara', true)));
        $pi = htmlspecialchars(trim($this->input->post('pi', true)));
        $di = $this->input->post('di', true);
        $de = $this->input->post('de', true);
        $pass_file = $this->input->post('filepass', true);

        $dataPassport = [
            "pass_no" => $nopass,
            "nationality" => $nationality,
            "place_issued" => $pi,
            "date_issued" => $di,
            "date_expired" => $de,
            "pass_file" => $pass_file
        ];

        $addDataPribadi = $this->M_visa->addVisa('vs_personal', $dataPersonal);

        if ($addDataPribadi > 0) {
            $addDataPassport = $this->M_visa->addVisa('vs_passport', $dataPassport);

            if ($addDataPassport > 0) {
                $visaData = [
                    'name' => $name,
                    'pass_no' => $nopass
                ];
                $this->session->set_userdata($visaData);
                redirect('bukti/visa');
            }
        }
    }
}
