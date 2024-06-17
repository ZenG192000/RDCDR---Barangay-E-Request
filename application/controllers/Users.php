<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('Upload_prof_model');
    }

    public function manage()
    {
        ob_start();
        $this->load->view('templates/header');
        $this->load->view('users/account', $data);
        $this->load->view('templates/footer');
        ob_end_flush();
    }

    public function signup()
    {

        // Get user input from the form
        $email = $this->input->post('email');
        $passwordcheck = $this->input->post('password');
        $confirmPassword = $this->input->post('confirmPassword');

        // Check if the email already exists in the database
        if ($this->users_model->check_email_exists($email)) {
            // Set JSON error response
            $response = array(
                'success' => false,
                'message' => 'Email already exists. Please use a different email.'
            );
        } else {
            // Add password validation
            $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

            if (!preg_match($passwordPattern, $passwordcheck)) {
                // Set JSON error response for invalid password
                $response = array(
                    'success' => false,
                    'message' => 'Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one numeric digit, and one special character.'
                );
            } else if ($passwordcheck !== $confirmPassword) {
                // Set JSON error response for password mismatch
                $response = array(
                    'success' => false,
                    'message' => 'Passwords do not match.'
                );
            } else {
                $surname = $this->input->post('surname');
                $firstname = $this->input->post('firstname');
                $middlename = $this->input->post('middlename');
                $password = md5($this->input->post('password'));
                $birthday = $this->input->post('birthday');
                $age = $this->input->post('age');
                $gender = $this->input->post('gender');

                // Generate a unique verification token
                $verification_token = md5(uniqid());

                // Create a new user record in the database with a 'status' of 'unverified'
                $user_data = array(
                    'Email' => $email,
                    'Surname' => $surname,
                    'Firstname' => $firstname,
                    'Middlename' => $middlename,
                    'Password' => $password,
                    'Birthday' => $birthday,
                    'Age' => $age,
                    'Gender' => $gender,
                    'Verification_token' => $verification_token,
                    'StatusEmail' => 'unverified',
                    'DateCreated'  => date('Y-m-d h:i:s'),
                    'AccessType' => 'Resident',
                    'Pimage' => 'default.png'
                );

                if ($this->users_model->create_user($user_data)) {
                    // Send a verification email
                    if ($this->send_verification_email($email, $verification_token)) {

                        // Set JSON success response
                        $response = array(
                            'success' => true,
                            'message' => 'Registration successful! Please check your email for verification.'
                        );
                    } else {
                        $response = array(
                            'success' => false,
                            'message' => 'No Email Sent.'
                        );
                    }
                } else {
                    // Set JSON error response
                    $response = array(
                        'success' => false,
                        'message' => 'Registration failed. Please try again.'
                    );
                }
            }
        }
        // Return JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function send_verification_email($email, $verification_token)
    {
        ob_start();
        $to = $email;
        $subject = 'Email Verification';
        $verification_link = site_url("users/verify_email/$verification_token");
        $message = "Click the following link to verify your email address: <a href='$verification_link'>Verify Email</a>";

        // Send the email
        $result = $this->phpmailer_lib->sendMail($to, $subject, $message);
        ob_end_clean();
        if ($result === TRUE) {
            return true; // Email sent successfully
        } else {
            return $result; // Error message from PHPMailer
        }
    }

    public function verify_email($verification_token)
    {
        ob_start();
        $response = array(); // Initialize response array

        // Check if the user is already verified
        $is_verified = $this->users_model->is_user_verified($verification_token);
        if ($is_verified) {
            $this->session->set_flashdata('msgError', 'Email is already verified. You can log in.');
            $response = array(
                'success' => false,
                'message' => 'Email is already verified. You can log in.'
            );
        } else {
            // Attempt to verify the user
            $verification_result = $this->users_model->verify_user($verification_token);
            if ($verification_result) {
                $this->session->set_flashdata('msgSuccess', 'Email verification successful! You can now log in.');
                $response = array(
                    'success' => true,
                    'message' => 'Email verification successful! You can now log in.'
                );
            } else {
                $this->session->set_flashdata('msgError', 'Email verification failed. Please contact support.');
                $response = array(
                    'success' => false,
                    'message' => 'Email verification failed. Please contact support.'
                );
            }
        }

        echo json_encode($response);
        ob_end_flush();
        // Redirect the user
        redirect('login');
    }

    public function send_reset_link()
    {
        $email = $this->input->post('REmail');
        $user = $this->users_model->get_user_by_email($email);

        if ($user) {
            $token = bin2hex(random_bytes(16));
            $expiration_time = date('Y-m-d H:i:s', strtotime('+30 minutes'));

            $this->users_model->save_reset_token($email, $token, $expiration_time);

            $subject = "Reset Your Password";
            $message = "Click the link below to reset your password: " . site_url('users/reset_password/' . $token);

            $result = $this->phpmailer_lib->sendMail($email, $subject, $message);

            if ($result === TRUE) {
                $response = array(
                    'success' => true,
                    'message' => 'Reset link sent successfully'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Error sending reset link: ' . $result
                );
            }
        } else {
            $response = array(
                'success' => false,
                'message' => 'Invalid email address'
            );
        }

        // Send JSON response
        echo json_encode($response);
    }

    public function reset_password($token)
    {
        $user = $this->users_model->get_user_by_token($token);

        if ($user && strtotime($user->forgot_token_expiration_time) > time()) {
            $data['token'] = $token;
            $this->load->view('users/reset_password_form', $data);
        } else {
            $this->load->view('errors/invalid');
        }
    }

    public function process_reset_password()
    {
        $token = $this->input->post('token');
        $new_password = $this->input->post('NewPassword');

        $user = $this->users_model->get_user_by_token($token);

        if ($user && strtotime($user->forgot_token_expiration_time) > time()) {
            $result = $this->users_model->reset_password($user->UserID, $new_password);
            $response = array(
                'success' => true,
                'message' => 'Password reset successful!'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Invalid or expired token'
            );
        }

        // Send JSON response
        echo json_encode($response);
    }

    public function Updateprofile()
    {
        $uploaded = $this->Upload_prof_model->upload_image();

        if ($this->session->userdata('user_info')) {
            $user = $this->session->userdata('user_info');
            $usr = $user->UserID;
            $ln = $user->Surname;
            $defaultimage = $user->Pimage;
        }


        if (is_array($uploaded)) {
            $filename = $uploaded['file_name'];

            $data = array(

                'Birthday'        => $this->input->post('dateOfBirth'),
                'Age'        => $this->input->post('Age'),
                'Pimage'        => $filename,
                'Editedby' => $ln,
                'DateEdited'   => date('Y-m-d h:i:s')
            );
        } else {
            $data = array(
                'Birthday'        => $this->input->post('dateOfBirth'),
                'Age'        => $this->input->post('Age'),
                'Pimage'        => $defaultimage,
                'Editedby' => $ln,
                'DateEdited'   => date('Y-m-d h:i:s')
            );
        }

        $results = $this->users_model->editProfile($usr, $data);

        if ($results) {
            $response = array('status' => 1, 'message' => 'Your changes have been saved');
        } else {
            $response = array('status' => 2, 'message' => 'An error occurred while saving your changes or having a duplicated username');
        }
        echo json_encode($response);
    }

    public function update_password()
    {
        $userID = $this->input->post('UserID');
        $currentPassword = $this->input->post('currentpassword1');
        $newPassword = $this->input->post('newpassword1');
        $confirmNewPassword = $this->input->post('cnewpassword1');
        // Check if the current password is correct
        if ($this->users_model->check_password($userID, $currentPassword)) {
            // Check if the new password and confirm password match
            if ($newPassword === $confirmNewPassword) {
                // Check if the password meets the requirements
                if ($this->isPasswordValid($newPassword)) {
                    // Update the password
                    $this->users_model->update_password($userID, $newPassword);
                    echo json_encode(['status' => 'success', 'message' => 'Password updated successfully.']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Password does not meet the requirements.']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'New password and confirm password do not match.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Current password is incorrect.']);
        }
    }

    // Password validation function
    private function isPasswordValid($password)
    {
        $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        return preg_match($passwordRegex, $password);
    }
}
