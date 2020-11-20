<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminApps extends CI_Model{

        public function f_get_admin_application_tableDtls()
        {

            $sql = $this->db->query(" SELECT * FROM td_application ");
            return $sql->result();

        }

        public function f_get_view_applicationDtls($appl_no)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE appl_no = '$appl_no' ");
            return $sql->result();

        }


        public function adminStatusUpdation($updateValue, $appl_no)
        {

            $this->db->where('appl_no', $appl_no);
            $this->db->update('td_application', $updateValue);

        }

        public function f_get_downloadLink($appl_no)
        {

            $sql = $this->db->query(" SELECT a.appl_name, a.appl_pp_path, a.applcnt_pasprt_no, a.kin_pp_path, a.kin_psprt_no, a.huit_cert_path, a.huit_exp_dt,
                                     a.med_cert_path, a.med_exp_dt, a.h2s_cert_path, a.h2s_exp_dt,
                                    b.oth_item1_path, b.oth_item1, b.oth_item2_path, b.oth_item2, b.oth_item3_path, b.oth_item3, b.oth_item4_path, b.oth_item4,
                                    b.oth_item5_path, b.oth_item5, b.oth_item6_path, b.oth_item6, b.oth_item7_path, b.oth_item7, b.oth_item8_path, b.oth_item8
                                    FROM td_application a, td_application_oth b WHERE a.appl_no = b.appl_no AND a.appl_no = '$appl_no' ");

            return $sql->result();

        }

        public function f_get_download_itemPath($appl_no, $item, $sl_no)
        {

            // switch ($favcolor) {

            //     case "1": 
            //         $sql = $this->db->query(" SELECT ");

            // }

            //if($i = "1" || $i== "2" || $i== "3" || $i== "4" || $i== "5")
            if($sl_no <= 5)
            {
                $tableName = "td_application";
            }
            elseif($sl_no > 5)
            {
                $tableName = "td_application_oth";
            }


            $sql = $this->db->query(" SELECT `$item` FROM `$tableName` WHERE appl_no = '$appl_no' ");
            return $sql->row();

        }










    }

?>