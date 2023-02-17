<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Model{

/*Checking weather the supplied email id exists*/
public function chk_email($email){
	$count = $this->db->query("select count(*)ecount 
							   from md_users 
							   where user_id = '$email'");

	return $count->row();
}

/*Insert A New User When someone Signs Up Or Admin open anather admin user*/
public function insert_user($data){
	$this->db->insert('md_users',$data);
}


/*update DB by verifying email */
public function verifyEmailAddress($verificationcode){  
		$sql = "update md_users set verify_stat='A' WHERE email_verification_code=?";

		$this->db->query($sql, array($verificationcode));

		return $this->db->affected_rows(); 
}		

/*Retrieve pwd against supplied User Id*/
public function selectPwd($userId){

	$this->db->select('password');

	$this->db->where('user_id',$userId);

	$this->db->where('verify_stat','A');

	$data = $this->db->get('md_users');

	if($data->num_rows()>0){

		return $data->row();

	}else{

		return false;
	}
}

/*Select all data for a user id*/
public function userInf($userId){

	$this->db->select('*');

	$this->db->where('user_id',$userId);

	$data = $this->db->get('md_users');

	return $data->row();
}


// getting total applications applied - 
public function f_get_dashboardBalance($userId)
{

	$sql = $this->db->query(" SELECT COUNT(*) AS tot_application FROM td_application WHERE user_id = '$userId' ");
	return $sql->row();

}

// to get state wise dashboard balance // For Ordinary user-- 
public function f_get_dashboardSectionBalance($userId, $status)
{

	$sql = $this->db->query(" SELECT COUNT(*) AS num_row FROM td_application WHERE user_id = '$userId' AND status = '$status' ");
	return $sql->row();

}

//To get state wise dashboard balance // For admin-- 
public function f_get_admin_dashboardBalance($userId)
{

	$sql = $this->db->query(" SELECT COUNT(*) AS tot_application FROM td_application ");
	return $sql->row();

}

public function f_get_admin_dashboardSectionBalance($userId, $status)
{

	$sql = $this->db->query(" SELECT COUNT(*) AS num_row FROM td_application WHERE status = '$status' ");
	return $sql->row();

}


/*Check supplied user id verify status*/
public function verify_email($email){

	$count = $this->db->query("select count(*)vcount 
							   from md_users 
							   where user_id     = '$email'
							   and   verify_stat = 'A'");

	return $count->row();
}

	public function appl_dtls($userId){
		$this->db->select('*');
		$this->db->where('user_id',$userId);
		$data = $this->db->get('td_application');
		return $data->row();
		if($data->num_rows()>0){
			return $data->row();
		}else{
			return false;
		}
	}
	public function userdtls(){
		$this->db->select('*');
		$this->db->where('user_status','A');
		$data = $this->db->get('md_users');
		return $data->result();

	}
	public function Applicationdtls(){
		$user_id    = $this->session->userdata('login')->user_id;
		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$data = $this->db->get('td_application');
		return $data->result();

	}

	

	public function bankdtls(){
		$this->db->select('*');
		$this->db->where('sl_no',1);
		$data = $this->db->get('md_bank_dtls');
		return $data->row();
	}

	public function response(){
		$this->db->select('*');
		$this->db->order_by("trans_dt","sl_no");
		$data = $this->db->get('td_outward_response');
		return $data->result();
	}

	public function max_no(){
		$data = $this->db->query("select ifnull(max(sl_no),0) + 1 trans_cd
						  		  from td_outward_response
						  	      where trans_dt = CURDATE()");

		return $data->row();
		 
	}


	public function insert_response($data){
		$this->db->insert('td_outward_response',$data);
	}


	public function max_cd(){
		$data = $this->db->query("select ifnull(max(sl_no),0) + 1 trans_cd
						  		  from td_inward
						  	      where trans_dt = CURDATE()");

		return $data->row();
		 
	}

	public function insert_inup($data){
		$this->db->insert('td_inward',$data);
	}
/***************************** */

/************************************* */
	/* *public function getDetails($value){
		
		$result['fileName'] = $result['resFile'] = array();


		$this->db->select('response_file');
		$this->db->where("file_name", $value);
		$data = $this->db->get('td_outward_response');

		if($data->row()){
			$result['fileName'] = $value;

			$result['resFile'] = $data->row()->response_file;

			return $result;
		}
		else{

			$result['fileName'] = $value;

			$result['resFile'] = 0;

			return $result;
		}

	}*/

	public function insert_bank($data){
		$this->db->insert('md_bank_dtls',$data);
	}

	public function edit_bank($data) {
		    $this->db->where('sl_no',1); 
			$this->db->update('md_bank_dtls', $data);
		}

	
/********************************** */

	public function edit_user($data,$where) {
		    $this->db->where('user_id',$where); 
			$this->db->update('md_users', $data);
		}

/***************get max application no***********/
		public function appl_no(){
			$data = $this->db->query("select ifnull(max(appl_no),0)+1 as appl_no
										from td_application");

			// $data = $this->db->query("select max(appl_no)+1 as appl_no
			// 							from td_application");
	
			return $data->row();
			 
		}
/***************Insert and edit application ***********/
	public function insert_application($data){
			$this->db->insert('td_application',$data);
		}
		public function edit_application($data,$where) {
		    $this->db->where('Appl_no',$where); 
			$this->db->update('td_application', $data);
		}

}




?>