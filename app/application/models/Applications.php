<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Applications extends CI_Model{

		public function applDtls($user_id){

			$this->db->select('*');
			
			$this->db->where('user_id',$user_id);

			$this->db->order_by("sl_no", "asc");

			$data = $this->db->get("td_application");

			return $data->result();
		}


		public function f_get_maxSlNo_for_applcation()
		{

			$sql = $this->db->query(" SELECT ifnull(MAX(sl_no),0) AS sl_no FROM td_application ");

			return $sql->row();
		}

public function f_get_appl_name($appl_no)
{
  	$sql = $this->db->query(" SELECT concat('Name: ',appl_name)appl_name,
  		                     concat('Expiry Date: ',DATE_FORMAT(h2s_exp_dt,'%M %d %Y'))h2s_exp_dt,appl_no appl_no,nric_no nric_no,applcnt_pasprt_no applcnt_pasprt_no,appl_nation,org_name,applcnt_add,apl_cnt_mob,position_title,huit_exp_dt huit_exp_dt,med_exp_dt med_exp_dt FROM td_application WHERE appl_no = '$appl_no'");

			return $sql->row();  
}
		public function f_get_max_othSlNo($appl_no)
		{

			$sql = $this->db->query(" SELECT MAX(sl_no) AS oth_sl_no FROM td_application_oth WHERE appl_no = '$appl_no' ");
			return $sql->row();

		}

		public function f_insert_applcationDtls($insertValue)
		{

			$this->db->insert('td_application', $insertValue);

		}

		public function f_insert_nextFormDtls($value, $appl_no, $sl_no)
		{

			$this->db->where('appl_no', $appl_no);
			$this->db->where('sl_no', $sl_no);
			$this->db->update('td_application', $value);

		}

		// public function f_insert_other_applicationDtls($oth_sl_no, $userId, $appl_no, $oth_item, $oth_sup_doc_path, $oth_num)
		// {

		// 	for($i = 0; $i<$oth_num; $i++)
		// 	{

		// 		$value = array('sl_no' => $oth_sl_no+$i,
		// 						'user_id' => $userId,
		// 						'appl_no' => $appl_no,
		// 						'item' => $oth_item[$i],
		// 						'item_path' => $oth_sup_doc_path[$i] );
				
		// 		$this->db->insert('td_application_oth', $value);

		// 	}

		// }


		public function f_get_application_editData($appl_no)
		{

			$sql = $this->db->query(" SELECT * FROM td_application WHERE appl_no = '$appl_no' ");
			return $sql->result();

		}

		public function f_get_application_pdf($appl_no)
		{

			$sql = $this->db->query(" SELECT * FROM td_application WHERE appl_no = '$appl_no' ");
			return $sql->row();

		}
		/*public function f_get_application_valid_card($appl_no)
		{

			$sql = $this->db->query("SELECT med_exp_dt AS VAL_DT FROM `td_application` WHERE appl_no='$appl_no' UNION ALL SELECT validity1 AS VAL_DT from td_application_training WHERE appl_no='$appl_no' UNION all SELECT validity2 AS VAL_DT from td_application_training WHERE appl_no='$appl_no' UNION ALL SELECT validity3 AS VAL_DT from td_application_training WHERE appl_no='$appl_no' UNION ALL SELECT validity4 AS VAL_DT from td_application_training WHERE appl_no='$appl_no' UNION ALL SELECT validity5 AS VAL_DT from td_application_training WHERE appl_no='$appl_no'");
			return $sql->result_array();

		}*/

		public function f_get_application_valid_card($appl_no)
		{

			$sql = $this->db->query("select min(valid_dt)min_valid
									 from(select huit_exp_dt valid_dt
									      from   td_application
									      where  appl_no = '$appl_no'
									      UNION
										  select med_exp_dt valid_dt
										  from   td_application
										  where  appl_no = '$appl_no'
										  UNION
										  select h2s_exp_dt valid_dt
										  from   td_application
										  where  appl_no = '$appl_no')a");
			return $sql->row();

		}

		public function f_get_training_editData($appl_no)
		{

			$sql = $this->db->query(" SELECT * FROM td_application_training WHERE appl_no = '$appl_no' ");
			return $sql->result();

		}

		
		public function f_update_applcationDtls($updateValue,$appl_no)
		{

			$this->db->where('appl_no', $appl_no);

			$this->db->update('td_application', $updateValue);

		}

		public function f_check_training_byApplnNo($appl_no)
		{

			$sql = $this->db->query(" SELECT COUNT(*) AS row FROM td_application_training WHERE appl_no = '$appl_no' ");
			return $sql->row();

		}


		public function f_delete_applicationDtls($sl_no, $appl_no)
		{

			$sql = $this->db->query(" DELETE FROM td_application WHERE sl_no = $sl_no AND appl_no = '$appl_no' ");

		}


		public function f_delete_applicationTraining($sl_no, $appl_no)
		{

			$sql = $this->db->query(" DELETE FROM td_application_training WHERE appl_no = '$appl_no' ");

		}


		// For other docs uploadation
		public function f_get_uploadDtls($appl_no, $sl_no)
		{

			$sql = $this->db->query(" SELECT appl_name, appl_no, sl_no FROM td_application WHERE sl_no = $sl_no AND appl_no = '$appl_no' ");
			return $sql->result();

		}

		public function f_check_prevUploadDtls($appl_no)
		{

			$sql = $this->db->query(" SELECT COUNT(*) AS num_row FROM td_application_oth WHERE appl_no = '$appl_no' ");
			return $sql->row();

		}

		public function f_get_prevUploadDtls($appl_no)
		{

			$sql = $this->db->query(" SELECT * FROM td_application_oth WHERE appl_no = '$appl_no' ");
			return $sql->result();

		}

		public function f_insert_othDtls($insertValue)
		{

			$this->db->insert('td_application_oth', $insertValue);

		}

		public function f_update_othDtls($insertValue, $appl_no)
		{

			$this->db->where('appl_no', $appl_no);
			$this->db->update('td_application_oth', $insertValue);

		}

		public function f_get_country()
		{

			$sql = $this->db->query(" SELECT * FROM md_country");
			return $sql->result();

		}





	}