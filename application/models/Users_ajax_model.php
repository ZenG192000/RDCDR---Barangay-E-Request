<?php

class Users_Ajax_model extends CI_Model
{
	
	public function createData($data)
	{
		$query = $this->db->insert('UsersTBL', $data);
		return $query;
	}

	public function fetchAllData($data, $tablename, $where)
	{
		$query = $this->db->select($data)
			->from($tablename)
			->where($where)
			->order_by('UserID', 'DESC') 
			->get();
		return $query->result_array();
	}
	public function fetchSingleData($data, $tablename, $where)
	{
		$query = $this->db->select($data)
			->from($tablename)
			->where($where)
			->get();
		return $query->row_array();
	}
	public function updateData($tablename, $data, $where)
	{
		$query = $this->db->update($tablename,$data,$where);
		return $query;
	}
	public function fetchAllDataDeleted($data, $tablename, $where)
	{
		$query = $this->db->select($data)
			->from($tablename)
			->where($where)
			->where('Is_Deleted =', 1)
			->get();
		return $query->result_array();
	}
}
