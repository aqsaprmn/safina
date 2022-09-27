<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_all');
    }

    public function index()
    {
    }

    public function registration()
    {
        // Data Login
        $username = htmlspecialchars($this->input->post('username', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        // Data Personal
        $fullname = htmlspecialchars($this->input->post('nama', true));
        $nik = htmlspecialchars($this->input->post('nik', true));
        $pob = htmlspecialchars($this->input->post('pob', true));
        $dob = htmlspecialchars($this->input->post('dob', true));
        $sex = htmlspecialchars($this->input->post('sex', true));
        $address = htmlspecialchars($this->input->post('address', true));
        $telp = htmlspecialchars($this->input->post('telp', true));
        $national = htmlspecialchars($this->input->post('national', true));


        // $this->form_validation->set_rules('name', 'Full Name', 'required|trim', [
        //     'required' => 'Name is Required!'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        //     'required' => 'Email is Required!',
        //     'is_unique' => 'Email Already Registered!',
        //     'valid_email' => 'Email is Not Valid!'
        // ]);
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]', [
        //     'required' => 'Password is Required!',
        //     'min_length' => 'Password Min 3 Characters'
        // ]);
        // $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]', [
        //     'required' => 'Repeat Password is Required!',
        //     'matches' => 'Password Doesn\'t Match'
        // ]);

        $data =
            [
                'datalogin' => [
                    'username' => $username,
                    'email' => $email,
                    'password' => password_hash($password1, PASSWORD_DEFAULT),
                    'role_id' => 'CUS'
                ],
                'datapribadi' => [
                    'username' => $username,
                    'name' => $fullname,
                    'nik' => $nik,
                    'dob' => $dob,
                    'pob' => $pob,
                    'sex' => $sex,
                    'address' => $address,
                    'hp' => $telp,
                    'nationality' => $national,
                    'image' => 'user.png',
                    'date_reg' => date('Y-m-d H:i:s')
                ]
            ];

        // $token = base64_encode(random_bytes(32));

        // $user_token = [
        //     'email' => $email,
        //     'token' => $token,
        //     'date' => time()
        // ];

        // if ($this->form_validation->run() == false) {
        //     $data['script'] = "<script src=' " . base_url('assets') . "/js/login.js'></script>";
        //     $data['title'] = "Pendaftaran";
        //     $this->load->view('header_front', $data);
        //     $this->load->view('register');
        //     $this->load->view('footer_front', $data);
        // } else {

        $affectLog = $this->M_all->insertData('us_user', $data['datalogin']);
        $affectPer = $this->M_all->insertData('us_user_data', $data['datapribadi']);
        // $token_ins = $this->M_User->insertData('user_token', $user_token);

        if ($affectLog > 0) {
            if ($affectPer > 0) {
                $this->session->set_userdata(['regis_sukses' => 'Pendaftaran Berhasil!']);
                redirect(base_url());
            } else {
                redirect(base_url());
            }
        } else {
            // $this->session->set_flashdata('message',  '
            //     <div class="alert alert-success alert-dismissible fade show" role="alert">
            //         Your Registration Account is Failed.
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //         </button>
            //     </div>');
            redirect(base_url());
        }
        // }
    }
}
