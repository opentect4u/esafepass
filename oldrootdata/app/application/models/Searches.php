<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Searches extends CI_Model
    {

        public function f_get_applications_byDate($from_dt, $to_dt)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE appl_dt >= '$from_dt' AND appl_dt <= '$to_dt' ");
            return $sql->result();

        }

        public function f_get_applications_byAppNo($from_no, $to_no)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE CAST(`appl_no` AS SIGNED) >= '$from_no' AND CAST(`appl_no` AS SIGNED) <= '$to_no' ");
            return $sql->result();

        }

        public function f_archiveByDate($from_dt, $to_dt)
        {

            $sql = $this->db->query(" UPDATE `td_application` SET `archive` = 'Y' WHERE appl_dt >= '$from_dt' AND appl_dt <= '$to_dt' ");

        }

        public function f_archiveByApp($from_no, $to_no)
        {

            $sql = $this->db->query(" UPDATE `td_application` SET `archive` = 'Y' WHERE CAST(`appl_no` AS SIGNED) >= '$from_no' AND CAST(`appl_no` AS SIGNED) <= '$to_no' ");

        }

        public function f_excelByDate($from_dt, $to_dt)
        {

            $sql = $this->db->query("Select a.user_id user_id ,a.sl_no sl_no,a.appl_no appl_no,a.appl_dt appl_dt,
                                            a.org_type org_type,a.org_name org_name,a.org_address org_address,
                                            a.org_email org_email,a.org_web_add org_web_add,a.org_ph_no org_ph_no,
                                            a.appl_for appl_for,a.your_f_name your_f_name,a.your_m_name your_m_name,
                                            a.your_l_name your_l_name,a.your_position your_position,a.your_email your_email,
                                            a.your_cnct your_cnct,a.sponsor_name sponsor_name,a.sponsor_dept sponsor_dept,
                                            a.appl_name appl_name,a.appl_mid_name appl_mid_name,a.appl_last_name appl_last_name,
                                            a.position_title position_title,a.nric_no nric_no,a.applcnt_dob applcnt_dob,a.applcnt_pasprt_no applcnt_pasprt_no,
                                            a.gender gender,a.appl_nation appl_nation,a.applcnt_add applcnt_add,a.applcnt_email applcnt_email,
                                            a.job_pos_tit job_pos_tit,a.apl_cnt_fxd apl_cnt_fxd,a.apl_cnt_mob apl_cnt_mob,a.kin_name kin_name,a.kin_mid_name kin_mid_name,
                                            a.kin_last_name kin_last_name,a.kin_nric_no kin_nric_no,a.kin_add kin_add,a.kin_dob kin_dob,a.kin_ph kin_ph,a.kin_mob kin_mob,
                                            a.kin_email kin_email,a.kin_gender kin_gender,a.kin_nation kin_nation,a.kin_psprt_no kin_psprt_no,a.applcnt_kin_reltion applcnt_kin_reltion,
                                            a.med_center med_center,a.med_cert_no med_cert_no,a.ame_name ame_name,a.ame_no ame_no,a.exam_dt exam_dt,a.blood_grp blood_grp,
                                            a.alergies alergies,a.alergy_dtls alergy_dtls,a.huit_exp_dt huit_exp_dt,a.med_exp_dt med_exp_dt,a.inst_name inst_name,
                                            a.inst_adr inst_adr,a.course_title course_title,a.tr_cert_no tr_cert_no,a.attend_dt_from attend_dt_from,a.attend_dt_to attend_dt_to,
                                            a.remarks remarks,b.inst_name1 inst_name1,b.adr1 adr1,b.course1 course1,
                                            b.cert_no1 cert_no1,b.from_dt1 from_dt1,b.to_dt1 to_dt1,b.validity1 validity1,
                                            b.inst_name2 inst_name2,b.adr2 adr2,b.course2 course2,
                                            b.cert_no2 cert_no2,b.from_dt2 from_dt2,b.to_dt2 to_dt2,b.validity2 validity2,
                                            b.inst_name3 inst_name3,b.adr3 adr3,b.course3 course3,
                                            b.cert_no3 cert_no3,b.from_dt3 from_dt3,b.to_dt3 to_dt3,b.validity3 validity3,
                                            b.inst_name4 inst_name4,b.adr4 adr4,b.course4 course4,
                                            b.cert_no4 cert_no4,b.from_dt4 from_dt4,b.to_dt3 to_dt4,b.validity4 validity4,
                                            b.inst_name5 inst_name5,b.adr5 adr5,b.course5 course5,
                                            b.cert_no5 cert_no5,b.from_dt5 from_dt5,b.to_dt5 to_dt5,b.validity5 validity5
                                    from td_application a
                                    LEFT JOIN td_application_training AS b
                                    ON   b.appl_no = a.appl_no
                                    where   a.appl_dt >= '$from_dt' AND a.appl_dt <= '$to_dt'
                                    order by a.appl_dt");

                                    return $sql->result();
        }

        public function f_excelByAplNo($from_no, $to_no)
        {

            $sql = $this->db->query("Select a.user_id user_id ,a.sl_no sl_no,a.appl_no appl_no,a.appl_dt appl_dt,
                                            a.org_type org_type,a.org_name org_name,a.org_address org_address,
                                            a.org_email org_email,a.org_web_add org_web_add,a.org_ph_no org_ph_no,
                                            a.appl_for appl_for,a.your_f_name your_f_name,a.your_m_name your_m_name,
                                            a.your_l_name your_l_name,a.your_position your_position,a.your_email your_email,
                                            a.your_cnct your_cnct,a.sponsor_name sponsor_name,a.sponsor_dept sponsor_dept,
                                            a.appl_name appl_name,a.appl_mid_name appl_mid_name,a.appl_last_name appl_last_name,
                                            a.position_title position_title,a.nric_no nric_no,a.applcnt_dob applcnt_dob,a.applcnt_pasprt_no applcnt_pasprt_no,
                                            a.gender gender,a.appl_nation appl_nation,a.applcnt_add applcnt_add,a.applcnt_email applcnt_email,
                                            a.job_pos_tit job_pos_tit,a.apl_cnt_fxd apl_cnt_fxd,a.apl_cnt_mob apl_cnt_mob,a.kin_name kin_name,a.kin_mid_name kin_mid_name,
                                            a.kin_last_name kin_last_name,a.kin_nric_no kin_nric_no,a.kin_add kin_add,a.kin_dob kin_dob,a.kin_ph kin_ph,a.kin_mob kin_mob,
                                            a.kin_email kin_email,a.kin_gender kin_gender,a.kin_nation kin_nation,a.kin_psprt_no kin_psprt_no,a.applcnt_kin_reltion applcnt_kin_reltion,
                                            a.med_center med_center,a.med_cert_no med_cert_no,a.ame_name ame_name,a.ame_no ame_no,a.exam_dt exam_dt,a.blood_grp blood_grp,
                                            a.alergies alergies,a.alergy_dtls alergy_dtls,a.huit_exp_dt huit_exp_dt,a.med_exp_dt med_exp_dt,a.inst_name inst_name,
                                            a.inst_adr inst_adr,a.course_title course_title,a.tr_cert_no tr_cert_no,a.attend_dt_from attend_dt_from,a.attend_dt_to attend_dt_to,
                                            a.remarks remarks,b.inst_name1 inst_name1,b.adr1 adr1,b.course1 course1,
                                            b.cert_no1 cert_no1,b.from_dt1 from_dt1,b.to_dt1 to_dt1,b.validity1 validity1,
                                            b.inst_name2 inst_name2,b.adr2 adr2,b.course2 course2,
                                            b.cert_no2 cert_no2,b.from_dt2 from_dt2,b.to_dt2 to_dt2,b.validity2 validity2,
                                            b.inst_name3 inst_name3,b.adr3 adr3,b.course3 course3,
                                            b.cert_no3 cert_no3,b.from_dt3 from_dt3,b.to_dt3 to_dt3,b.validity3 validity3,
                                            b.inst_name4 inst_name4,b.adr4 adr4,b.course4 course4,
                                            b.cert_no4 cert_no4,b.from_dt4 from_dt4,b.to_dt3 to_dt4,b.validity4 validity4,
                                            b.inst_name5 inst_name5,b.adr5 adr5,b.course5 course5,
                                            b.cert_no5 cert_no5,b.from_dt5 from_dt5,b.to_dt5 to_dt5,b.validity5 validity5
                                    from td_application a
                                    LEFT JOIN td_application_training AS b
                                    ON   b.appl_no = a.appl_no
                                    Where cast(a.appl_no as signed) >= '$from_no' 
                                    and   cast(a.appl_no as signed) <= '$to_no'
                                    order by a.appl_no");

                                    return $sql->result();
        }

        //   Created On 02/12/2020  By Lokesh kumar jha     ///


        public function f_get_applications_byfname($fname)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE appl_name = '$fname' ");
            return $sql->result();

        }

        public function f_get_applications_bylname($lname)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE appl_last_name = '$lname' ");
            return $sql->result();

        }

        public function f_get_applications_bynric($nric)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE nric_no = '$nric' ");
            return $sql->result();

        }

        public function f_get_applications_bypassport($passport)
        {

            $sql = $this->db->query(" SELECT * FROM td_application WHERE applcnt_pasprt_no = '$passport' ");
            return $sql->result();

        }

        


    }
   
?>