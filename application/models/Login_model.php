<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table = 'UsersTBL';
    }
    public function login($where)
    {
        $user_exist = $this->db->get_where($this->table, $where);

        if ($user_exist->num_rows() > 0) {
            return $user_exist->row();
        }
        
    }
}
