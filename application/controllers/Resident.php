<?php

class Resident extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('resident_model');
        $this->load->model('document_model');
        $this->load->model('upload_model');
        $this->load->model('Upload_docs_model');
        $this->load->model('announce_model');
        // $this->load->model('resident_ajax_model');
        if (!$this->session->userdata('user_info')) {
            redirect('login');
        }
    }

    public function generate_resident_id()
    {
        $resident_id = $this->resident_model->generate_resident_id();
        echo json_encode(['resident_id' => $resident_id]);
    }

    public function index()
    {
        $data['announcements'] = $this->announce_model->getAnnouncements();
        $this->load->view('resident/templates/header');
        $this->load->view('resident/index', $data);
        $this->load->view('resident/templates/footer');
    }

    public function verify()
    {
        $this->load->view('resident/verify');
    }

    public function BDocs()
    {
        $this->load->view('resident/templates/header');
        $this->load->view('resident/Brgydocs');
        $this->load->view('resident/templates/footer');
    }

    public function fetchadd()
    {
        // Retrieve the surname from the AJAX request
        $surname = $this->input->post('surname');

        // Fetch data from the database based on the Surname
        // Replace this with your actual database query
        $address = $this->resident_model->getAddressBySurname($surname);
        // Return the address data
        echo $address;
    }
    public function waiting()
    {
        $this->load->view('resident/waitingV');
    }


    public function ManageTrans()
    {
        $this->load->view('resident/templates/header');
        $this->load->view('resident/Transaction');
        $this->load->view('resident/templates/footer');
    }

    public function ManageTrack()
    {
        $this->load->view('resident/templates/header');
        $this->load->view('resident/Tracking');
        $this->load->view('resident/templates/footer');
    }

    public function wait()
    {
        $data = array(
            'Firstname' => $this->input->post('firstname'),
            'Middlename' => $this->input->post('middlename'),
            'Surname' => $this->input->post('surname'),
            'StepVerifyNo' => $this->input->post('StepVerifyNo')
        );

        // You should have a model method to check data in the database
        $dataExists = $this->resident_model->checkResidentData($data);

        // Return the result as JSON
        $this->output->set_content_type('application/json')->set_output(json_encode(array('exists' => $dataExists)));
    }

    public function fetchDatafromDatabaseUsers()
    {
        $resultList = $this->users_ajax_model->fetchAllData('*', 'UsersTBL', array());
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            $image = '<img src="' . htmlspecialchars(base_url() . 'img/userimg/' . $value['Pimage']) . '" style="width:5em; border-radius: 50%; " />';
            $buttonEd = '<button id="edit' . $value['UserID'] . '" onclick="confirmEdit(' . $value['UserID'] . ')" class="btn btn-info">Edit</button>';
            // $buttonRes = '<button id="res' . $value['UserID'] . '" onclick="confirmRes(' . $value['UserID'] . ')" class="btn btn-warning">Reset Password</button>';
            $Deactivate = '<button id="deact' . $value['UserID'] . '" onclick="confirmDeact(' . $value['UserID'] . ')" class="btn btn-danger">Deact</button>';
            $result['data'][] = array(
                $i++,
                $image,
                htmlspecialchars($value['Firstname']) . ' ' . htmlspecialchars($value['Middlename']) . ' ' . htmlspecialchars($value['Surname']),
                htmlspecialchars($value['Email']),
                htmlspecialchars($value['AccessType']),
                date('F j, Y', strtotime($value['DateCreated'])),
                $buttonEd . " " .
                    $Deactivate,
            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabaseHistory()
    {
        $fullname = $this->input->post('Fulls'); // Assuming you're using CodeIgniter's input class

        $where = array('Fullname' => $fullname, 'Is_Claimed' => 1); // Replace 'fullname_column' with the actual column name in your database

        $resultList = $this->document_model->fetchAllDataTransactHistory('*', 'DocumentTBL', $where);
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
             if ($value['PaymentMethod'] == "GCash") {
                $Payments = 'Gcash Ready to Pick-up';
            } else {
                // Display text "Approved"
                $Payments = 'Cash on Pick-up';
            }
            if ($value['DateofClaimed'] == null) {
                $formattedDate = 'N/A';
            } else {
                $formattedDate = date('F j, Y', strtotime($value['DateofClaimed']));
            }
            // $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" data-lightbox="IDImages" data-title="ID Image"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" style="width:5em; border-radius: 20%; " /></a>';
            // $Signature = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" data-lightbox="Signatures" data-title="Signature"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" style="width:5em; border-radius: 20%; " /></a>';
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['TransactionNo']),
                htmlspecialchars($value['TypeofDocument']),
                date('F j, Y', strtotime($value['DateRequested'])),
                $formattedDate,
                $Payments,
                htmlspecialchars($value['Amount']),

            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabaseTracking()
    {
        $fullname = $this->input->post('Fulls'); // Assuming you're using CodeIgniter's input class

        $where = array('Fullname' => $fullname, 'Is_Claimed' => 0); // Replace 'fullname_column' with the actual column name in your database

        $resultList = $this->document_model->fetchAllDataTracking('*', 'DocumentTBL', $where);
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            $formattedDateClaimed = ($value['DateRequested'] != null) ? date('F j, Y g:i A', strtotime($value['DateRequested'])) : 'N/A';

            $viewReceiptButton = '<button class="btn btn-info view-receipt-btn" data-id="' . $value['DocumentID'] . '" data-transaction-no="' . $value['TransactionNo'] . '" data-document-type="' . $value['TypeofDocument'] . '" data-fullname="' . $value['Fullname'] . '" data-date-claimed="' . $formattedDateClaimed . '">View</button>';
            if ($value['PaymentMethod'] == "GCash") {
                $Payments = 'Gcash Ready to Pick-up';
            } else {
                // Display text "Approved"
                $Payments = 'Cash on Pick-up';
            }
            if ($value['DateofClaming'] == null) {
                $formattedDate = 'N/A';
            } else {
                $formattedDate = date('F j, Y', strtotime($value['DateofClaming']));
            }
            // $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" data-lightbox="IDImages" data-title="ID Image"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" style="width:5em; border-radius: 20%; " /></a>';
            // $Signature = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" data-lightbox="Signatures" data-title="Signature"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" style="width:5em; border-radius: 20%; " /></a>';
           
            if ($value['PaymentMethod'] == "GCash" && $value['Status'] == "Pending") {
                // Display Accept and Decline buttons
                $Status = 'Proccessing...';
            } else if ($value['PaymentMethod'] == "GCash" && $value['Status'] == "Approved") {
                $Status = '"Ready to pick up';
            } else if ($value['PaymentMethod'] == "Cash" && $value['Status'] == "Approved") {
                $Status = '"Ready to pick up';
            } else if ($value['PaymentMethod'] == "Cash" && $value['Status'] == "Pending") {
                $Status = 'Proccessing...';
            } else if ($value['PaymentMethod'] == null) {
                $Status = 'Unknown';

            } else {
                // Display text "Approved"
                $Status = 'To be paid uppon claming';
            }
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['TransactionNo']),
                htmlspecialchars($value['TypeofDocument']),
                $Payments,
                htmlspecialchars($value['Amount']),
                $Status,
                date('F j, Y', strtotime($value['DateRequested'])),
                $formattedDate,
                $viewReceiptButton
            );
        }
        echo json_encode($result);
    }


    public function getEditData()
    {
        $id = $this->input->post('id');
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

    private function processAddressString($Address)
    {
        $address_parts = explode(',', $Address);
        $processed_address = implode(',', array_slice($address_parts, 0, 2));
        return $processed_address;
    }

    public function dataverify()
    {

        // Validate reCAPTCHA
        $recaptchaResponse = $this->input->post('g-recaptcha-response');

        // Your reCAPTCHA secret key
        $recaptchaSecretKey = '6Le3BhQpAAAAAG9zBY3sc8ZbQk7AixG-zUTt3Tff';

        // Verify reCAPTCHA
        $recaptchaVerify = $this->verifyRecaptcha($recaptchaResponse, $recaptchaSecretKey);

        if (!$recaptchaVerify) {
            $response = [
                'success' => false,
                'message' => 'reCAPTCHA verification failed.',
            ];

            echo json_encode($response);
            return;
        } else {
            // Upload ID Photo
            $config['upload_path']   = './img/res_img/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            $upload_id_result = $this->upload_model->upload_image('imageID');

            if (isset($upload_id_result['error'])) {
                $response = [
                    'success' => false,
                    'message' => 'Error uploading ID Photo: ' . $upload_id_result['error'],
                ];

                echo json_encode($response);
                return;
            }

            $filenameImageID = $upload_id_result['file_name'];

            // Upload Picture of Signature
            $config['upload_path']   = './img/res_img/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            $upload_result = $this->upload_model->upload_m_image('inputGroupFile01');

            if (isset($upload_result['error'])) {
                $response = [
                    'success' => false,
                    'message' => 'Error uploading Picture of Signature: ' . $upload_result['error'],
                ];

                echo json_encode($response);
                return;
            }

            $filenameImage = $upload_result['file_name'];

            // Data for insertion
            $data = [
                'ResidentNo'           => $this->input->post('resid'),
                'Surname'              => $this->input->post('surname'),
                'Firstname'            => $this->input->post('firstname'),
                'Middlename'           => $this->input->post('middlename'),
                'DateOfBirth'          => $this->input->post('DateofBirth'),
                'Age'                  => $this->input->post('Agew'),
                'CivilStatus'          => $this->input->post('CivilStatus'),
                'Gender'               => $this->input->post('genderr'),
                'Address'              => $this->input->post('full-address'),
                'ValidID'              => $this->input->post('selected_option'),
                'IDPhoto'              => $filenameImageID,
                'PictureOfSignature'   => $filenameImage,
                'DateCreated'          => date('Y-m-d h:i:s'),
            ];

            $results = $this->resident_model->insertverifydatas($data);

            if ($results) {
                $response = [
                    'success' => true,
                    'message' => 'Your data have been submitted.',
                    'redirect' => site_url('resident/waiting')
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'An error occurred while submitting your data. Please contact the administrator.',
                    'redirect' => site_url('resident/verify')
                ];
            }

            echo json_encode($response);
        }
    }
    // Function to verify reCAPTCHA
    private function verifyRecaptcha($recaptchaResponse, $recaptchaSecretKey)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ];

        $options = [
            'http' => [
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result, true);

        return isset($resultJson['success']) && $resultJson['success'];
    }

    public function addrequestdocs()
    {
        $uploaded = $this->Upload_docs_model->upload_image();

        if (is_array($uploaded)) {
            $filename = $uploaded['file_name'];
            $data = array(
                'TypeofDocument'         => $this->input->post('TypeofDocument'),
                'Fullname'         => $this->input->post('Fullname'),
                'Address'     => $this->input->post('Address'),
                'Age'         => $this->input->post('Age'),
                'IssueFor'         => $this->input->post('IssueFor'),
                'DateOfBirth'         => $this->input->post('DateOfBirth'),
                'PlaceOfBirth'         => $this->input->post('PlaceOfBirth'),
                'TransactionNo'         => $this->input->post('TransactionNo'),
                'YearOfResident'         => $this->input->post('YearOfResident'),
                'PaymentMethod'         => $this->input->post('PaymentMethod'),
                'Amount'         => $this->input->post('Amount'),
                'Reciept'         => $filename,
                'Status'         => "Pending",
                'Is_Paid'         => 'No',
                'DateRequested'  => date('Y-m-d h:i:s'),
                'Is_Deleted' => 0
            );


            $results = $this->document_model->addDocument($data);
            if ($results) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error'));
            }
        } else {
            $data = array(
                'TypeofDocument'         => $this->input->post('TypeofDocument'),
                'Fullname'         => $this->input->post('Fullname'),
                'Address'     => $this->input->post('Address'),
                'Age'         => $this->input->post('Age'),
                'IssueFor'         => $this->input->post('IssueFor'),
                'DateOfBirth'         => $this->input->post('DateOfBirth'),
                'PlaceOfBirth'         => $this->input->post('PlaceOfBirth'),
                'TransactionNo'         => $this->input->post('TransactionNo'),
                'YearOfResident'         => $this->input->post('YearOfResident'),
                'PaymentMethod'         => $this->input->post('PaymentMethod'),
                'Amount'         => $this->input->post('Amount'),
                'Status'         => "Pending",
                'Is_Paid'         => 'Yes',
                'DateRequested'  => date('Y-m-d h:i:s'),
                'Is_Deleted' => 0
            );


            $results = $this->document_model->addDocument($data);
            if ($results) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error'));
            }
        }
    }
}
