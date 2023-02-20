<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supers extends CI_Model{

	public function genUserList(){
		
		$data = $this->db->query("select * from md_users
								  where user_type in ('A','O')
								  order by user_type");

		return $data->result();
	}

	public function genUserList_admin()
	{

		$sql = $this->db->query(" SELECT * FROM md_users WHERE user_type= 'O' ORDER BY user_name ");
		return $sql->result();

	}

	public function genUserDtls($userId){

		$this->db->select('*');

		$this->db->where('user_id',$userId);
		
		$data = $this->db->get("md_users");

		return $data->result();
	}



	//For Editing row

    public function edit($table_name, $data_array, $where) {

        $this->db->where($where);
        $this->db->update($table_name, $data_array);

        return;

    }

    //For insert row

    public function insert($table_name, $data_array) {

        $this->db->insert($table_name, $data_array);

        return;

	}
	
	// For updating pass -- 
	public function f_update_userPass($userId, $newpass)
	{

		$array = array('password' => $newpass);

		$this->db->where('user_id', $userId);
		$this->db->update('md_users', $array);

	}

	public function f_get_userName($userId)
	{

		$sql = $this->db->query(" SELECT user_name FROM md_users WHERE user_id = '$userId' ");
		return $sql->result();

	}



}