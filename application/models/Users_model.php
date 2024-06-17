<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'UsersTBL';
    }


    public function create_user($data)
    {
        $this->db->insert('UsersTBL', $data); // 'users' should be your users table name
        return $this->db->insert_id();
    }

    public function verify_user($verification_token)
    {
        $this->db->where('verification_token', $verification_token);
        $this->db->set('StatusEmail', 'verified');
        $this->db->update('UsersTBL');

        return $this->db->affected_rows() > 0;
    }

    public function is_user_verified($verification_token)
    {
        $this->db->where('verification_token', $verification_token);
        $this->db->where('StatusEmail', 'verified');
        $query = $this->db->get('UsersTBL');

        return $query->num_rows() == 1;
    }

    public function check_email_exists($email)
    {
        $this->db->where('Email', $email);
        $query = $this->db->get('UsersTBL');

        return $query->num_rows() > 0;
    }

    public function get_user_by_verification_token($verification_token)
    {
        $this->db->where('verification_token', $verification_token);
        $query = $this->db->get('UsersTBL');

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return NULL;
        }
    }

    public function userscount()
    {
        $where = array(
            'Is_Deleted' => 0,
            'StatusEmail' => 'verified',

        );

        $query = $this->db->get_where($this->table, $where);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        }
    }

    public function usersoldcount()
    {
        $where = array(
            'Is_Deleted' => 0,
            'StatusEmail' => 'verified',

        );

        $this->db->where('DATE(DateCreated) != CURDATE()', NULL, FALSE);

        $query = $this->db->get_where($this->table, $where);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        }
    }

    public function usersnewcount()
    {
        $where = array(
            'Is_Deleted' => 0,
            'StatusEmail' => 'verified',

        );

        $today = date('Y-m-d');
        $this->db->where('DATE(DateCreated) =', $today);

        $query = $this->db->get_where($this->table, $where);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        }
    }

    public function update_email_status($email, $status)
    {
        $this->db->where('email', $email);
        $this->db->update('users', array('StatusEmail' => $status));

        return $this->db->affected_rows() > 0;
    }

    public function edit($id, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'UserID'         => $id
        );

        return $this->db->update($this->table, $data, $where);
        //$this->db->last_query();

    }

    public function delete($id, $data)
    {
        $where = array(
            'is_deleted' => 0,
            'id'         => $id
        );


        $this->db->update($this->table, $data, $where);
        return true;
    }

    public function get_user_by_email($email)
    {
        $this->db->where('Email', $email);
        return $this->db->get('UsersTBL')->row();
    }

    public function save_reset_token($email, $token, $expiration_time)
    {
        $data = array(
            'forgot_token' => $token,
            'forgot_token_expiration_time' => $expiration_time
        );
        $this->db->where('Email', $email);
        $this->db->update('UsersTBL', $data);
    }

    public function get_user_by_token($token)
    {
        $this->db->where('forgot_token', $token);
        return $this->db->get('UsersTBL')->row();
    }

    public function reset_password($user_id, $new_password)
    {
        $data = array(
            'password' => md5($new_password),
            'forgot_token' => "NULL" // Hash the password using MD5
        );
        $this->db->where('UserID', $user_id);
        $this->db->update('UsersTBL', $data);
    }

    public function editProfile($usr, $data)
    {
        $where = array(
            'Is_Deleted' => 0,
            'UserID'         => $usr
        );

        return $this->db->update($this->table, $data, $where);
        //$this->db->last_query();

    }


    public function check_password($userID, $currentPassword) {
        $this->db->select('Password');
        $this->db->where('UserID', $userID);
        $query = $this->db->get('UsersTBL');

        if ($query->num_rows() > 0) {
            $storedPassword = $query->row()->Password;
            $enteredPassword = md5($currentPassword);

            return ($storedPassword === $enteredPassword);
        }

        return false;
    }

    public function update_password($userID, $newPassword) {
        $hashedPassword = md5($newPassword);

        $data = array(
            'Password' => $hashedPassword
        );

        $this->db->where('UserID', $userID);
        $this->db->update('UsersTBL', $data);
    }
}
