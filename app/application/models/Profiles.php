<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Model{

	public function userDtls($user_id){

		$this->db->select('*');
		
		$this->db->where('user_id',$user_id);

		$data = $this->db->get("md_users");

		return $data->row();
	}



	//For Editing row

    public function edit($table_name, $data_array, $where) {

        $this->db->where($where);
        $this->db->update($table_name, $data_array);

        return;

    }
}