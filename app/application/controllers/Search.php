<?php  

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

            $this->load->model('AdminApps');

            $this->load->model('Applications');

            $this->load->model('Process');

            $this->load->model('Searches');

            $link['title']  = 'Admin';

            $link['link']   =   [
                    
                    "/assets/plugins/footable/css/footable.core.css",

                    "/assets/plugins/bootstrap-select/bootstrap-select.min.css",

                    "/assets/plugins/daterangepicker/daterangepicker.css"

                ];


            $link['userName'] 		=  $_SESSION['user_name'].' '.$_SESSION['user_last_name'];

            $userId                 = $this->session->userdata('login')->user_id;

            $link['userData']       = $this->Process->userInf($userId);

            $this->load->view('dashboard/header',$link);
        }


        public function byDate()
        {

            $this->load->view('search/dateForm');
            
            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }


        public function viewByDate()
        {

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $from_dt        =       $_POST['from_dt'];
                $to_dt          =       $_POST['to_dt'];

                $viewData['data'] = $this->Searches->f_get_applications_byDate($from_dt, $to_dt);
                $viewData['from_dt'] = $from_dt;
                $viewData['to_dt'] = $to_dt;


                $this->load->view('search/dateTable', $viewData);

                $script['script'] = [
        
                    '/assets/plugins/footable/js/footable.all.min.js',
        
                    '/assets/plugins/bootstrap-select/bootstrap-select.min.js',
        
                    'js/footable-init.js',
        
                    '/assets/plugins/datatables/jquery.dataTables.min.js'
                
                ];
    
                $this->load->view('dashboard/footer', $script);

            }

        }


        public function archive()
        {

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $from_dt    =    $_POST['from_dt'];
                $to_dt      =    $_POST['to_dt'];

                $value = array('archive' => 'Y');

                $this->Searches->f_archiveByDate($from_dt, $to_dt);

                $viewData['data'] = $this->Searches->f_get_applications_byDate($from_dt, $to_dt);
                $viewData['from_dt'] = $from_dt;
                $viewData['to_dt'] = $to_dt;

                $this->load->view('search/dateTable', $viewData);

                $script['script'] = [
        
                    '/assets/plugins/footable/js/footable.all.min.js',
        
                    '/assets/plugins/bootstrap-select/bootstrap-select.min.js',
        
                    'js/footable-init.js',
        
                    '/assets/plugins/datatables/jquery.dataTables.min.js'
                
                ];
    
                $this->load->view('dashboard/footer', $script);

            }

        }


        public function archiveApp()
        {

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $from_no    =    $_POST['from_no'];
                $to_no      =    $_POST['to_no'];

                $value = array('archive' => 'Y');

                $this->Searches->f_archiveByApp($from_no, $to_no);

                $viewData['data'] = $this->Searches->f_get_applications_byAppNo($from_no, $to_no);
                $viewData['from_no'] = $from_no;
                $viewData['to_no'] = $to_no;

                $this->load->view('search/appTable', $viewData);

                $script['script'] = [
        
                    '/assets/plugins/footable/js/footable.all.min.js',
        
                    '/assets/plugins/bootstrap-select/bootstrap-select.min.js',
        
                    'js/footable-init.js',
        
                    '/assets/plugins/datatables/jquery.dataTables.min.js'
                
                ];
    
                $this->load->view('dashboard/footer', $script);

            }

        }


        public function exportApp()
        {

            $from_no = $this->input->get('from');
            $to_no   = $this->input->get('to');

            $this->load->library('excel');

            $object = new PHPExcel();
            
            $object->setActiveSheetIndex(0);

            $table_column = array("User Id","Sl.No.","Application No.","Application Date","Org Type",
                                  "Org Name","Org Add","Org Email","Org Web Add.","Org Ph.No.","Appl For","Your F Name",
                                  "Your M Name","Your L Name","Your Pos","Your Email","Your Cnct","Sponsor","Spon Dept",
                                  "Appl Name","Appl Mid Name","Appl Last Name","Position Title","Nric No.","Appl DOB","Appl Pass No",
                                  "Gender","Nationality","Appl Addr","Appl Email","Job Position","Appl Fxd No.","Appl Mob","Kin Name",
                                  "Kin M Name","Kin L Name","Kin Nric No.","Kin Addr","Kin Dob","Kin Ph","Kin Mob","Kin Email","Kin Gender",
                                  "Kin Nationality","Kin Pass No.","Appl Kin Relation","Medical Cntr","Med Cert No.","AME Name","AME No",
                                  "Exam Dt","Blood Grp","Alergy","Alg Dtl","Med Cert Exp Dt","Inst Name","Inst Adr","Course Tit","Cert No.",
                                  "Tr Atnd From","Tr Atnd To","Tr Validity Dt","Remarks","Trn Inst1","Tr Inst Adr1","Tr crs1","Tr crt1",
                                  "Tr frm Dt1","Tr To Dt1","Tr Valid Dt1","Trn Inst2","Tr Inst Adr2","Tr crs2","Tr crt2",
                                  "Tr frm Dt2","Tr To Dt2","Tr Valid Dt2","Trn Inst3","Tr Inst Adr3","Tr crs3","Tr crt3",
                                  "Tr frm Dt3","Tr To Dt3","Tr Valid Dt3","Trn Inst4","Tr Inst Adr4","Tr crs4","Tr crt4",
                                  "Tr frm Dt4","Tr To Dt4","Tr Valid Dt4","Trn Inst5","Tr Inst Adr5","Tr crs5","Tr crt5",
                                  "Tr frm Dt5","Tr To Dt5","Tr Valid Dt5"
                                 );

            $column = 0;

			foreach($table_column as $values){
				$object->getActiveSheet()->SetCellValueByColumnAndRow($column,1,$values);
				$column++;	
			}
 
			$xldata = $this->Searches->f_excelByAplNo($from_no,$to_no);
			$rowCount = 2;

			foreach($xldata as $row){

				$object->getActiveSheet()->SetCellValueByColumnAndRow(0,$rowCount,$row->user_id);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(1,$rowCount,$row->sl_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(2,$rowCount,$row->appl_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(3,$rowCount,$row->appl_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(4,$rowCount,$row->org_type);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(5,$rowCount,$row->org_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(6,$rowCount,$row->org_address);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(7,$rowCount,$row->org_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(8,$rowCount,$row->org_web_add);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(9,$rowCount,$row->org_ph_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(10,$rowCount,$row->appl_for);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(11,$rowCount,$row->your_f_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(12,$rowCount,$row->your_m_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(13,$rowCount,$row->your_l_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(14,$rowCount,$row->your_position);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(15,$rowCount,$row->your_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(16,$rowCount,$row->your_cnct);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(17,$rowCount,$row->sponsor_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(18,$rowCount,$row->sponsor_dept);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(19,$rowCount,$row->appl_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(20,$rowCount,$row->appl_mid_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(21,$rowCount,$row->appl_last_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(22,$rowCount,$row->position_title);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(23,$rowCount,$row->nric_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(24,$rowCount,$row->applcnt_dob);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(25,$rowCount,$row->applcnt_pasprt_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(26,$rowCount,$row->gender);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(27,$rowCount,$row->appl_nation);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(28,$rowCount,$row->applcnt_add);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(29,$rowCount,$row->applcnt_email);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(30,$rowCount,$row->job_pos_tit);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(31,$rowCount,$row->apl_cnt_fxd);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(32,$rowCount,$row->apl_cnt_mob);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(33,$rowCount,$row->kin_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(34,$rowCount,$row->kin_mid_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(35,$rowCount,$row->kin_last_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(36,$rowCount,$row->kin_nric_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(37,$rowCount,$row->kin_add);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(38,$rowCount,$row->kin_dob);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(39,$rowCount,$row->kin_ph);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(40,$rowCount,$row->kin_mob);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(41,$rowCount,$row->kin_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(42,$rowCount,$row->kin_gender);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(43,$rowCount,$row->kin_nation);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(44,$rowCount,$row->kin_psprt_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(45,$rowCount,$row->applcnt_kin_reltion);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(46,$rowCount,$row->med_center);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(47,$rowCount,$row->med_cert_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(48,$rowCount,$row->ame_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(49,$rowCount,$row->ame_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(50,$rowCount,$row->exam_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(51,$rowCount,$row->blood_grp);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(52,$rowCount,$row->alergies);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(53,$rowCount,$row->alergy_dtls);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(54,$rowCount,$row->med_exp_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(55,$rowCount,$row->inst_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(56,$rowCount,$row->inst_adr);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(57,$rowCount,$row->course_title);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(58,$rowCount,$row->tr_cert_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(59,$rowCount,$row->attend_dt_from);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(60,$rowCount,$row->attend_dt_to);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(61,$rowCount,$row->huit_exp_dt);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(62,$rowCount,$row->remarks);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(70,$rowCount,$row->inst_name4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(71,$rowCount,$row->adr4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(72,$rowCount,$row->course4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(73,$rowCount,$row->cert_no4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(74,$rowCount,$row->from_dt4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(75,$rowCount,$row->to_dt4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(76,$rowCount,$row->validity4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(77,$rowCount,$row->inst_name5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(78,$rowCount,$row->adr5);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(79,$rowCount,$row->course5);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(80,$rowCount,$row->cert_no5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(81,$rowCount,$row->from_dt5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(82,$rowCount,$row->to_dt5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(83,$rowCount,$row->validity5);
               
				$rowCount++;
			}

			$filename = "Application_Form-".date("d-m-Y H-i-s").'.xlsx';
			$object->getActiveSheet()->setTitle("Application Form");

			header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control: max-age=0');

			$writer = PHPExcel_IOFactory::createWriter($object,'Excel2007');
			$writer->save('php://output');
		   
			exit;
 

        }


        public function exportDt()
        {

            $from_dt = $this->input->get('from');
            $to_dt = $this->input->get('to');

            $this->load->library('excel');

            $object = new PHPExcel();
            
            $object->setActiveSheetIndex(0);

            $table_column = array("User Id","Sl.No.","Application No.","Application Date","Org Type",
                                  "Org Name","Org Add","Org Email","Org Web Add.","Org Ph.No.","Appl For","Your F Name",
                                  "Your M Name","Your L Name","Your Pos","Your Email","Your Cnct","Sponsor","Spon Dept",
                                  "Appl Name","Appl Mid Name","Appl Last Name","Position Title","Nric No.","Appl DOB","Appl Pass No",
                                  "Gender","Nationality","Appl Addr","Appl Email","Job Position","Appl Fxd No.","Appl Mob","Kin Name",
                                  "Kin M Name","Kin L Name","Kin Nric No.","Kin Addr","Kin Dob","Kin Ph","Kin Mob","Kin Email","Kin Gender",
                                  "Kin Nationality","Kin Pass No.","Appl Kin Relation","Medical Cntr","Med Cert No.","AME Name","AME No",
                                  "Exam Dt","Blood Grp","Alergy","Alg Dtl","Med Cert Exp Dt","Inst Name","Inst Adr","Course Tit","Cert No.",
                                  "Tr Atnd From","Tr Atnd To","Tr Validity Dt","Remarks","Trn Inst1","Tr Inst Adr1","Tr crs1","Tr crt1",
                                  "Tr frm Dt1","Tr To Dt1","Tr Valid Dt1","Trn Inst2","Tr Inst Adr2","Tr crs2","Tr crt2",
                                  "Tr frm Dt2","Tr To Dt2","Tr Valid Dt2","Trn Inst3","Tr Inst Adr3","Tr crs3","Tr crt3",
                                  "Tr frm Dt3","Tr To Dt3","Tr Valid Dt3","Trn Inst4","Tr Inst Adr4","Tr crs4","Tr crt4",
                                  "Tr frm Dt4","Tr To Dt4","Tr Valid Dt4","Trn Inst5","Tr Inst Adr5","Tr crs5","Tr crt5",
                                  "Tr frm Dt5","Tr To Dt5","Tr Valid Dt5"
                                 );

            $column = 0;

			foreach($table_column as $values){
				$object->getActiveSheet()->SetCellValueByColumnAndRow($column,1,$values);
				$column++;	
			}
 
			$xldata = $this->Searches->f_excelByDate($from_dt,$to_dt);
			$rowCount = 2;

			foreach($xldata as $row){

				$object->getActiveSheet()->SetCellValueByColumnAndRow(0,$rowCount,$row->user_id);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(1,$rowCount,$row->sl_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(2,$rowCount,$row->appl_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(3,$rowCount,$row->appl_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(4,$rowCount,$row->org_type);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(5,$rowCount,$row->org_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(6,$rowCount,$row->org_address);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(7,$rowCount,$row->org_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(8,$rowCount,$row->org_web_add);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(9,$rowCount,$row->org_ph_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(10,$rowCount,$row->appl_for);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(11,$rowCount,$row->your_f_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(12,$rowCount,$row->your_m_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(13,$rowCount,$row->your_l_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(14,$rowCount,$row->your_position);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(15,$rowCount,$row->your_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(16,$rowCount,$row->your_cnct);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(17,$rowCount,$row->sponsor_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(18,$rowCount,$row->sponsor_dept);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(19,$rowCount,$row->appl_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(20,$rowCount,$row->appl_mid_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(21,$rowCount,$row->appl_last_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(22,$rowCount,$row->position_title);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(23,$rowCount,$row->nric_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(24,$rowCount,$row->applcnt_dob);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(25,$rowCount,$row->applcnt_pasprt_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(26,$rowCount,$row->gender);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(27,$rowCount,$row->appl_nation);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(28,$rowCount,$row->applcnt_add);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(29,$rowCount,$row->applcnt_email);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(30,$rowCount,$row->job_pos_tit);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(31,$rowCount,$row->apl_cnt_fxd);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(32,$rowCount,$row->apl_cnt_mob);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(33,$rowCount,$row->kin_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(34,$rowCount,$row->kin_mid_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(35,$rowCount,$row->kin_last_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(36,$rowCount,$row->kin_nric_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(37,$rowCount,$row->kin_add);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(38,$rowCount,$row->kin_dob);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(39,$rowCount,$row->kin_ph);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(40,$rowCount,$row->kin_mob);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(41,$rowCount,$row->kin_email);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(42,$rowCount,$row->kin_gender);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(43,$rowCount,$row->kin_nation);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(44,$rowCount,$row->kin_psprt_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(45,$rowCount,$row->applcnt_kin_reltion);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(46,$rowCount,$row->med_center);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(47,$rowCount,$row->med_cert_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(48,$rowCount,$row->ame_name);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(49,$rowCount,$row->ame_no);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(50,$rowCount,$row->exam_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(51,$rowCount,$row->blood_grp);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(52,$rowCount,$row->alergies);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(53,$rowCount,$row->alergy_dtls);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(54,$rowCount,$row->med_exp_dt);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(55,$rowCount,$row->inst_name);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(56,$rowCount,$row->inst_adr);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(57,$rowCount,$row->course_title);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(58,$rowCount,$row->tr_cert_no);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(59,$rowCount,$row->attend_dt_from);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(60,$rowCount,$row->attend_dt_to);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(61,$rowCount,$row->huit_exp_dt);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(62,$rowCount,$row->remarks);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt1);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity1);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt2);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity2);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(63,$rowCount,$row->inst_name3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(64,$rowCount,$row->adr3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(65,$rowCount,$row->course3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(66,$rowCount,$row->cert_no3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(67,$rowCount,$row->from_dt3);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(68,$rowCount,$row->to_dt3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(69,$rowCount,$row->validity3);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(70,$rowCount,$row->inst_name4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(71,$rowCount,$row->adr4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(72,$rowCount,$row->course4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(73,$rowCount,$row->cert_no4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(74,$rowCount,$row->from_dt4);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(75,$rowCount,$row->to_dt4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(76,$rowCount,$row->validity4);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(77,$rowCount,$row->inst_name5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(78,$rowCount,$row->adr5);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(79,$rowCount,$row->course5);
                $object->getActiveSheet()->SetCellValueByColumnAndRow(80,$rowCount,$row->cert_no5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(81,$rowCount,$row->from_dt5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(82,$rowCount,$row->to_dt5);
				$object->getActiveSheet()->SetCellValueByColumnAndRow(83,$rowCount,$row->validity5);
               
				$rowCount++;
			}

			$filename = "Application_Form-".date("d-m-Y H-i-s").'.xlsx';
			$object->getActiveSheet()->setTitle("Application Form");

			header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control: max-age=0');

			$writer = PHPExcel_IOFactory::createWriter($object,'Excel2007');
			$writer->save('php://output');
		   
			exit;
        }
        
        public function byAppNo()
        {

            $this->load->view('search/appNoForm');
            
            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }

        public function viewByApp()
        {

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $from_no        =       $_POST['from_no'];
                $to_no          =       $_POST['to_no'];

                $viewData['data'] = $this->Searches->f_get_applications_byAppNo($from_no, $to_no);
                $viewData['from_no'] = $from_no;
                $viewData['to_no'] = $to_no;

                $this->load->view('search/appTable', $viewData);

                $script['script'] = [
        
                    '/assets/plugins/footable/js/footable.all.min.js',
        
                    '/assets/plugins/bootstrap-select/bootstrap-select.min.js',
        
                    'js/footable-init.js',
        
                    '/assets/plugins/datatables/jquery.dataTables.min.js'
                
                ];
    
                $this->load->view('dashboard/footer', $script);

            }

        }





    }

?>