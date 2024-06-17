<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('users_ajax_model');
        $this->load->model('announce_model');
        if (!$this->session->userdata('user_info')) {
			redirect('login');
		}
    }

    public function index()
    {
        $data['announcements'] = $this->announce_model->getAnnouncements();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function fetchDatafromDatabaseUsers()
    {
        $resultList = $this->users_ajax_model->fetchAllData('*', 'UsersTBL', array());
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            $image = '<img src="' . htmlspecialchars(base_url() . 'img/userimg/' . $value['Pimage']) . '" style="width:5em; border-radius: 50%; " />';
            $buttonEd = '<button id="edit' . $value['UserID'] . '" onclick="confirmReact(' . $value['UserID'] . ')" class="btn btn-info">Reactivate</button>';
            // $buttonRes = '<button id="res' . $value['UserID'] . '" onclick="confirmRes(' . $value['UserID'] . ')" class="btn btn-warning">Reset Password</button>';
            $Deactivate = '<button id="deact' . $value['UserID'] . '" onclick="confirmDeact(' . $value['UserID'] . ')" class="btn btn-danger">Deact</button>';
            $isDeact = $value['is_Deleted'] == 1 ? 'Deactivated' : 'Active';
            $result['data'][] = array(
                $i++,
                $image,
                htmlspecialchars($value['Firstname']) . ' ' . htmlspecialchars($value['Middlename']) . ' ' . htmlspecialchars($value['Surname']),
                htmlspecialchars($value['Email']),
                htmlspecialchars($value['AccessType']),
                date('F j, Y', strtotime($value['DateCreated'])),
                $buttonEd . " " .
                    $Deactivate,
                $isDeact
            );
        }
        echo json_encode($result);
    }

    public function getEditData()
    {
        $id = $this->input->post('UserID');
        // Ensure $id is properly sanitized before using it in a database query.
        $resultData = $this->users_ajax_model->fetchSingleData('*', 'UsersTBL', array('UserID' => $id));
        echo json_encode($resultData);
    }

    public function ManageAccounts()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/ManageAccount');
        $this->load->view('admin/templates/footer');
    }

    public function ManageDocs()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/BarangayDocs');
        $this->load->view('admin/templates/footer');
    }

    public function deact()
    {
        $data = array(
            'Is_Deleted' => 1
        );

        $update = $this->users_ajax_model->updateData('UsersTBL', $data, array('UserID' => $this->input->post('UserID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Deact user has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Deact user has failed');
        }
        echo json_encode($response);
    }

    public function reactivate()
    {
        $data = array(
            'Is_Deleted' => 0
        );

        $update = $this->users_ajax_model->updateData('UsersTBL', $data, array('UserID' => $this->input->post('UserID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Reactivate user has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Reactivate user has failed');
        }
        echo json_encode($response);
    }
}
