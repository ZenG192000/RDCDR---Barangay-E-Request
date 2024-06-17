<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resident_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'ResidentTBL';
    }


    public function insertverifydatas($data)
    {
        $this->db->insert('ResidentTBL', $data);
        return $this->db->insert_id();
    }
    public function countResidents()
    {
        // Count the number of records in the ResidentTBL table
        return $this->db->count_all('ResidentTBL');
    }

    public function countMaleResidents() {
        // Count the number of male residents in the Gender column
        return $this->db->where('Gender', 'Male')->count_all_results('ResidentTBL');
    }

    public function countFemaleResidents() {
        // Count the number of female residents in the Gender column
        return $this->db->where('Gender', 'Female')->count_all_results('ResidentTBL');
    }
    public function get_last_resident_number()
    {
        $this->db->select('ResidentNo');
        $this->db->order_by('ResidentNo', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('ResidentTBL');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->ResidentNo;
        }

        return 0;
    }

    public function getAddressBySurname($surname)
    {
        // Replace 'ResidentTBL' and 'Address' with your actual table and column names
        $this->db->select('Address');
        $this->db->from('ResidentTBL');
        $this->db->where('Surname', $surname);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->Address;
        } else {
            return "No address found for the given surname.";
        }
    }

    public function generate_resident_id()
    {
        $last_resident_number = $this->get_last_resident_number();
        $year = date('Y');

        // Set a default counter value if no resident records exist
        $counter = $last_resident_number ? intval(substr($last_resident_number, -2)) + 1 : 1;

        // Format the Resident ID
        $resident_id = 'RDC_RES_' . $year . sprintf('%02d', $counter);

        return $resident_id;
    }


    public function verify_user($verification_token)
    {
        $this->db->where('verification_token', $verification_token);
        $this->db->set('StatusEmail', 'verified');
        $this->db->update('UsersTBL');

        return $this->db->affected_rows() > 0;
    }

    public function checkResidentData($data)
    {
        // Check if the data exists in the ResidentTBL
        $this->db->where($data);
        $query = $this->db->get('ResidentTBL');

        return $query->num_rows() > 0;
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
            'password' => md5($new_password) // Hash the password using MD5
        );
        $this->db->where('UserID', $user_id);
        $this->db->update('UsersTBL', $data);
    }
}
