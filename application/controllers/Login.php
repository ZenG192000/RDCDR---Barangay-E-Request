<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('announce_model');
        $this->load->model('off_model');
    }

    public function index()
    {

        if ($this->session->userdata('user_info')) {
            redirect('home');
        }

        $this->form_validation->set_rules('Lemail', 'email', 'trim|required');
        $this->form_validation->set_rules('Lpassword', 'Password', 'trim|required');

        if ($this->form_validation->run()) {

            $data = array(
                'email'      => $this->input->post('Lemail'),
                'password'   =>  md5($this->input->post('Lpassword')),
                'is_deleted' => 0,
                'StatusEmail' => 'verified'
            );

            $login = $this->login_model->login($data);

            if ($login) {
                $this->session->set_userdata('user_info', $login);

                // Check the AccessType
                if ($login->AccessType == 'Resident') {
                    // Redirect to existing provided code
                    if ($login->verify_detail == 0) {
                        $response = [
                            'success' => true,
                            'message' => 'Login Success please wait...',
                            'redirect' => site_url('resident/verify')
                        ];
                    } else {
                        $response = [
                            'success' => true,
                            'message' => 'Login Success please wait...',
                            'redirect' => site_url('resident/index')
                        ];
                    }
                } else if ($login->AccessType == 'Staff') {
                    // Redirect to existing provided code
                    $response = [
                        'success' => true,
                        'message' => 'Login Success please wait...',
                        'redirect' => site_url('staff/index')
                    ];
                } else {
                    // Redirect to admin.php for Staff or Admin
                    $response = [
                        'success' => true,
                        'message' => 'Login Success please wait...',
                        'redirect' => site_url('admin/index')
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => 'Email or password is incorrect please try again!'
                ];
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {

            $data['officials'] = $this->off_model->getOffs();
            $data['announcements'] = $this->announce_model->getAnnouncements();
            $this->load->view('index', $data);
        }
    }

    public function signout()
    {
        $this->session->unset_userdata('user_info');
        redirect('login');
    }
}
