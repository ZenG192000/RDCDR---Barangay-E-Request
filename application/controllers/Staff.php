<?php

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('resident_model');
        $this->load->model('Res_ajax_model');
        $this->load->model('document_model');
        $this->load->model('upload_model');
        $this->load->model('announce_model');
        $this->load->model('Upload_ann_model');
        $this->load->model('Upload_off_model');
        $this->load->model('off_model');
        // $this->load->model('resident_ajax_model');
        if (!$this->session->userdata('user_info')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['resident_count'] = $this->resident_model->countResidents();
        $data['male_resident_count'] = $this->resident_model->countMaleResidents();
        $data['female_resident_count'] = $this->resident_model->countFemaleResidents();
        $data['total_amount'] = $this->document_model->getTotalPaidAmount();
        $this->load->view('staff/templates/header');
        $this->load->view('staff/index', $data);
        $this->load->view('staff/templates/footer');
    }

    public function Announcement()
    {
        $this->load->view('staff/templates/header');
        $data['available_slots'] = $this->announce_model->getAvailableSlots();
        $this->load->view('staff/announce', $data);
        $this->load->view('staff/templates/footer');
    }

    public function Official()
    {
        $this->load->view('staff/templates/header');
        $data['available_slots'] = $this->off_model->getAvailableSlots();
        $this->load->view('staff/officials', $data);
        $this->load->view('staff/templates/footer');
    }

    public function Resident()
    {
        $this->load->view('staff/templates/header');
        $this->load->view('staff/resident');
        $this->load->view('staff/templates/footer');
    }

    public function Document()
    {
        $this->load->view('staff/templates/header');
        $this->load->view('staff/document');
        $this->load->view('staff/templates/footer');
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

    public function fetchDatafromDatabaseRes()
    {
        $resultList = $this->Res_ajax_model->fetchAllData('*', 'ResidentTBL', array());
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {

            $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" data-lightbox="IDImages" data-title="ID Image"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['IDPhoto']) . '" style="width:5em; border-radius: 20%; " /></a>';
            $Signature = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" data-lightbox="Signatures" data-title="Signature"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" style="width:5em; border-radius: 20%; " /></a>';
            if ($value['StepVerifyNo'] == 1) {
                // Display Accept and Decline buttons
                $Accept = '<a id="Accept' . $value['ResidentID'] . '" onclick="confirmAccept(' . $value['ResidentID'] . ')" class="btn btn-success"><i class="fa-sharp fa-solid fa-check fa-beat fa-lg"></i></a>';
                $Decline = '<a id="Decline' . $value['ResidentID'] . '" onclick="confirmDecline(' . $value['ResidentID'] . ')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-xmark fa-beat fa-lg"></i></a>';
            } else {
                // Display text "Approved"
                $Accept = 'Approved';
                $Decline = ''; // No need to display Decline if already Approved
            }
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['ResidentNo']),
                htmlspecialchars($value['Surname']),
                htmlspecialchars($value['Firstname']),
                htmlspecialchars($value['Middlename']),
                $IDimage,
                htmlspecialchars($value['ValidID']),
                $Signature,
                date('F j, Y', strtotime($value['DateCreated'])),
                $Accept . " " .
                    $Decline,
            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabaseDoc()
    {
        $resultList = $this->document_model->fetchAllData('*', 'DocumentTBL', array());
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            if ($value['DateofClaming'] == null) {
                $formattedDate = 'N/A';
            } else {
                $formattedDate = date('F j, Y', strtotime($value['DateofClaming']));
            }
            // $Signature = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" data-lightbox="Signatures" data-title="Signature"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" style="width:5em; border-radius: 20%; " /></a>';
            if ($value['PaymentMethod'] === 'GCash' && $value['Is_Paid'] === "Yes" && $value['DateofClaming'] === null) {
                // Display Accept and Decline buttons
                $ApproveRel = '<a id="editModal' . $value['DocumentID'] . '" onclick="ApproveRel(' . $value['DocumentID'] . ')" class="btn btn-success"><i class="fa-sharp fa-solid fa-check fa-beat"></i></a>';
                $DeclineRel = "";
            } else if ($value['PaymentMethod'] === 'Cash' && $value['DateofClaming'] === null) {
                $ApproveRel = '<a id="editModal' . $value['DocumentID'] . '" onclick="ApproveRel(' . $value['DocumentID'] . ')" class="btn btn-success"><i class="fa-sharp fa-solid fa-check fa-beat"></i></a>';
                $DeclineRel = '<a id="Decline' . $value['DocumentID'] . '" onclick="DeclineCash(' . $value['DocumentID'] . ')" class="btn btn-danger" style="margin-top: 5px;"><i class="fa-sharp fa-solid fa-xmark fa-beat fa-xl"></i></a>';
            } else if ($value['PaymentMethod'] === 'GCash' && $value['Is_Paid'] === "No") {
                $ApproveRel = 'Not Confirmed';
                $DeclineRel = " ";
            } else if (($value['PaymentMethod'] === 'Cash') && ($value['DateofClaming'] !== null) && ($value['Is_Claimed'] == 0)) {
                $ApproveRel = '<a id="editModal' . $value['DocumentID'] . '" onclick="ClaimedandPay(' . $value['DocumentID'] . ')" class="btn btn-success">Mark as Claimed</a>';
                $DeclineRel = "To be paid upon claiming";
            } else if (($value['PaymentMethod'] === 'GCash') && ($value['DateofClaming'] !== null) && ($value['Is_Claimed'] == 0) && ($value['Is_Paid'] === "Yes")) {
                $ApproveRel = '<a id="editModal' . $value['DocumentID'] . '" onclick="Claimed(' . $value['DocumentID'] . ')" class="btn btn-success"><i class="fa-sharp fa-solid fa-check fa-beat"></i></a>';
                $DeclineRel = "To be Claim";
            } else if ($value['Is_Claimed'] == 1) {
                $ApproveRel = 'Claimed';
                $DeclineRel = "";
            } else {
                // Display text "Approved"
                $ApproveRel = 'Approved';
                $DeclineRel = " ";
            }
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['TransactionNo']),
                htmlspecialchars($value['TypeofDocument']),
                htmlspecialchars($value['Fullname']),
                htmlspecialchars($value['Age']),
                htmlspecialchars($value['DateofBirth']),
                htmlspecialchars($value['Address']),
                htmlspecialchars($value['IssueFor']),
                htmlspecialchars($value['IssueDay']),
                htmlspecialchars($value['IssueMonthYear']),
                htmlspecialchars($value['YearOfResident']),
                $formattedDate,
                date('F j, Y', strtotime($value['DateRequested'])),
                htmlspecialchars($value['PaymentMethod']),
                $ApproveRel . " " . $DeclineRel
            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabasePayment()
    {
        $resultList = $this->Res_ajax_model->fetchAllDataPay('*', 'DocumentTBL', array('PaymentMethod' => 'GCash'));
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            if ($value['DateofClaming'] == null) {
                $formattedDate = 'N/A';
            } else {
                $formattedDate = date('F j, Y', strtotime($value['DateofClaming']));
            }
            $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Reciept']) . '" data-lightbox="Resibo" data-title="Resibo"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Reciept']) . '" style="width:5em; border-radius: 20%; " /></a>';
            // $Signature = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" data-lightbox="Signatures" data-title="Signature"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['PictureOfSignature']) . '" style="width:5em; border-radius: 20%; " /></a>';
            if ($value['Status'] == 'Pending' && $value['Is_Paid'] == 'No') {
                // Display Accept and Decline buttons
                $ApproveRel = '<a id="editModal' . $value['DocumentID'] . '" onclick="AcceptPayment(' . $value['DocumentID'] . ')" class="btn btn-success"><i class="fa-sharp fa-solid fa-check fa-beat"></i></a>';
                $DeclineRel = '<a id="Decline' . $value['DocumentID'] . '" onclick="DeclinePayment(' . $value['DocumentID'] . ')" class="btn btn-danger" style="margin-left: 5px;"><i class="fa-sharp fa-solid fa-xmark fa-beat fa-xl"></i></a>';
            } else {
                // Display text "Approved"
                $ApproveRel = 'Paid';
                $DeclineRel = '';
            }
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['TypeofDocument']),
                htmlspecialchars($value['Fullname']),
                date('F j, Y', strtotime($value['DateRequested'])),
                htmlspecialchars($value['PaymentMethod']),
                htmlspecialchars($value['Amount']),
                $IDimage,
                $ApproveRel . $DeclineRel
            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabaseOffcials()
    {
        $resultList = $this->off_model->fetchAllData('*', 'OfficialsTBL', array('Is_Deleted' => 0));

        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {
            $Delete = '<a id="Decline' . $value['OfficialID'] . '" onclick="AnnDelete(' . $value['OfficialID'] . ')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-xmark fa-beat fa-lg"></i></a>';
            $formattedName = htmlspecialchars($value['Surname']) . ' ' . htmlspecialchars($value['Firstname']) . ', ' . htmlspecialchars($value['Middlename']);
            $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Photo']) . '" data-lightbox="2b2Picture" data-title="2b2Picture"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Photo']) . '" style="width:5em; border-radius: 20%; " /></a>';
            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['slot_number']),
                htmlspecialchars($value['Nickname']),
                $formattedName,
                htmlspecialchars($value['Position']),
                $IDimage,
                date('F j, Y', strtotime($value['DateCreated'])),
                $Delete
            );
        }
        echo json_encode($result);
    }

    public function fetchDatafromDatabaseAnnounce()
    {
        $resultList = $this->announce_model->fetchAllDataAnnounce('*', 'announcementsTBL', array('Is_Deleted' => 0));
        $result = array();
        $i = 1;
        foreach ($resultList as $key => $value) {

            $IDimage = '<a href="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Picture']) . '" data-lightbox="Picture" data-title="Picture"><img src="' . htmlspecialchars(base_url() . 'img/res_img/' . $value['Picture']) . '" style="width:5em; border-radius: 20%; " /></a>';

            // Display Accept and Decline buttons
            $Delete = '<a id="Decline' . $value['AnnounceID'] . '" onclick="AnnDelete(' . $value['AnnounceID'] . ')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-xmark fa-beat fa-lg"></i></a>';

            $result['data'][] = array(
                $i++,
                htmlspecialchars($value['NameOfAnnouncement']),
                htmlspecialchars($value['Description']),
                $IDimage,
                htmlspecialchars($value['Date']),
                $Delete,
            );
        }
        echo json_encode($result);
    }

    public function getEditData()
    {
        $id = $this->input->post('id');
        // Ensure $id is properly sanitized before using it in a database query.
        $resultData = $this->document_model->fetchSingleData('*', 'DocumentTBL', array('DocumentID' => $id));
        echo json_encode($resultData);
    }

    public function Payments()
    {
        $this->load->view('staff/templates/header');
        $this->load->view('staff/payment');
        $this->load->view('staff/templates/footer');
    }

    public function Archive()
    {

        $this->load->view('staff/templates/header');
        $this->load->view('staff/archive');
        $this->load->view('staff/templates/footer');
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
        $data = array(
            'TypeofDocument'         => $this->input->post('TypeofDocument'),
            'Fullname'         => $this->input->post('Fullname'),
            'Address'     => $this->input->post('Address'),
            'Age'         => $this->input->post('Age'),
            'DateOfBirth'         => $this->input->post('DateOfBirth'),
            'Status'         => "Pending",
            'DateRequested'  => date('Y-m-d h:i:s'),
            'Amount' => $this->input->post('Amount'),
            'Is_Paid' => $this->input->post('No'),
            'Is_Claimed' => 0,
            'Is_Deleted' => 0
        );

        $results = $this->document_model->addDocument($data);
        if ($results) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }

    public function Announcements()
    {
        $uploaded = $this->Upload_ann_model->upload_image();

        if (is_array($uploaded)) {
            $filename = $uploaded['file_name'];
            $data = array(
                'slot_number' => $this->input->post('selected_slot'),
                'NameOfAnnouncement' => $this->input->post('Name'),
                'Description' => $this->input->post('Desc'),
                'Picture' => $filename,
                'Date' => date('Y-m-d h:i:s'),
            );

            $results = $this->announce_model->addAnnouncement($data);

            if ($results !== false) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Maximum number of announcements reached (3).'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error uploading file.'));
        }
    }

    public function Offciales()
    {
        $uploaded = $this->Upload_off_model->upload_image();

        if (is_array($uploaded)) {
            $filename = $uploaded['file_name'];
            $data = array(
                'slot_number' => $this->input->post('selected_slot1'),
                'Nickname' => $this->input->post('Nickname'),
                'Surname' => $this->input->post('Surname'),
                'Firstname' => $this->input->post('Firstname'),
                'Middlename' => $this->input->post('Middlename'),
                'Position' => $this->input->post('Position'),
                'Photo' => $filename,
                'DateCreated' => date('Y-m-d h:i:s'),
            );

            $results = $this->off_model->addOfficial($data);

            if ($results !== false) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Maximum number of announcements reached (3).'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error uploading file.'));
        }
    }

    public function ApproveRes()
    {

        $data = array(
            'StepVerifyNo' => 0
        );

        $update = $this->Res_ajax_model->updateData('ResidentTBL', $data, array('ResidentID' => $this->input->post('ResidentID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Approve Resident has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Approve Resident has failed');
        }
        echo json_encode($response);
    }

    public function ApprovePaid()
    {

        $data = array(
            'Is_Paid' => 'Yes'
        );

        $update = $this->document_model->updateData('DocumentTBL', $data, array('DocumentID' => $this->input->post('DocumentID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Approve as Paid has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Approve as Paid has failed');
        }
        echo json_encode($response);
    }

    public function ClaimedDocs()
    {

        $data = array(
            'Is_Claimed' => 1,
            'DateofClaimed' => date('Y-m-d h:i:s'),
            'Is_Paid' => 'Yes'
        );

        $update = $this->document_model->updateData('DocumentTBL', $data, array('DocumentID' => $this->input->post('DocumentID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Approve as Claimed has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Approve as Claimed has failed');
        }
        echo json_encode($response);
    }


    public function DeclinePaid()
    {
        $where_condition = array('DocumentID' => $this->input->post('DocumentID'));

        $this->db->where($where_condition);
        $delete = $this->db->delete('DocumentTBL');

        if ($delete) {
            $response = array('status' => 1, 'message' => 'Has been successfully decline!');
        } else {
            $response = array('status' => 2, 'message' => 'Decline has operation failed');
        }

        echo json_encode($response);
    }

    public function AnnounceDelete()
    {
        $data = array(
            'Is_Deleted' => 1
        );

        $update = $this->announce_model->updateData('AnnouncementsTBL', $data, array('AnnounceID' => $this->input->post('AnnounceID')));
        if ($update == true) {
            $response = array('status' => 1, 'message' => 'Delete announcement has been successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Delete announcement has failed');
        }
        echo json_encode($response);
    }


    public function DeleteRes()
    {
        $where_condition = array('ResidentID' => $this->input->post('ResidentID'));

        $this->db->where($where_condition);
        $delete = $this->db->delete('ResidentTBL');

        if ($delete) {
            $response = array('status' => 1, 'message' => 'Resident has been successfully deleted');
        } else {
            $response = array('status' => 2, 'message' => 'Delete Resident operation failed');
        }

        echo json_encode($response);
    }

    public function ApproveRel()
    {
        $data = array(
            'IssueDay'     => $this->input->post('editIssueDay'),
            'IssueMonthYear'     => $this->input->post('editIssueMY'),
            'DateofClaming'  => $this->input->post('editDOC'),
            'Status' => 'Approved'
        );

        $update = $this->document_model->updateData('DocumentTBL', $data, array('DocumentID' => $this->input->post('id')));
        if ($update) {
            $response = array('status' => 1, 'message' => 'Request has been released successfully');
        } else {
            $response = array('status' => 2, 'message' => 'Released Request operation failed');
        }
        echo json_encode($response);
    }
}
