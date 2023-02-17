<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class AdminApp extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

            $this->load->model('AdminApps');

            $this->load->model('Applications');

            $this->load->model('Process');

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


        public function application()
        {

            $tableData['data']  =   $this->AdminApps->f_get_admin_application_tableDtls();  
            
            $this->load->view('admin/applTable', $tableData);

            // $script['script'] = [

            //     "/assets/plugins/moment/moment.js",

            //     "/assets/plugins/daterangepicker/daterangepicker.js",

            //     "/js/moduleValidations.js"

            // ];

            $script['script'] = [
        
                '/assets/plugins/footable/js/footable.all.min.js',
    
                '/assets/plugins/bootstrap-select/bootstrap-select.min.js',
    
                'js/footable-init.js',
    
                '/assets/plugins/datatables/jquery.dataTables.min.js'
            
            ];

            $this->load->view('dashboard/footer', $script);

        }


        // To show application -- 
        public function viewApp()
        {

            $appl_no    =       $this->input->get('appl_no');
            //$sl_no      =       $this->input->get('sl_no');

            $viewData['data1'] = $this->AdminApps->f_get_view_applicationDtls($appl_no);
            $viewData['country'] = $this->Applications->f_get_country();

            $this->load->view('admin/viewAppl', $viewData);
            //$this->load->view('admin/applReport', $viewData);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }


        public function statusUpdation()
        {

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $appl_no        =       $_POST['appl_no'];

                //$sl_no          =       $_POST['sl_no'];

                //Organisation Details
                $org_type       =       $_POST['org_type'];

                $org_name       =       $_POST['org_name'];

                $org_adr        =       $_POST['org_adr'];

                $org_cnct       =       $_POST['org_cnct'];

                $org_web        =       $_POST['org_web'];

                $apl_for        =       $_POST['apl_for'];

                $yf_name        =       $_POST['yf_name'];

                $ym_name        =       $_POST['ym_name'];

                $yl_name        =       $_POST['yl_name'];

                $y_ypt          =       $_POST['ypt'];

                $y_email        =       $_POST['yemail'];

                $y_cnct         =       $_POST['ycnct'];

                //Sponsor Detail
                $spn_name       =       $_POST['spn_name'];

                $spn_dept       =       $_POST['spn_dpt'];  

                //Applicant Details
                $apl_name       =       $_POST['apl_name'];

                $apl_mname      =       $_POST['apl_mid_name'];

                $apl_lname      =       $_POST['apl_lst_name'];

                if(!empty($_FILES["apl_name_path"]["name"]))
                {
                    // * config* //
                    $config1['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config1['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config1['overwrite'] = TRUE;
                    $this->load->library('upload', $config1);
                    // * config* //

                    $apl_name_data = $_FILES["apl_name_path"]["name"];

                    if(! $this->upload->do_upload("apl_name_path"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path  =   'assets/userDocs/appl_photo/'.$apl_name_data;
                    }
                }
                else
                    {
                        $apl_name_path = $_POST['apl_name_path_prev'];
                    }

                $apl_pos_tit    =       $_POST['pos_tit'];

                $apl_nric_no    =       $_POST['nric_no'];

                if(!empty($_FILES["nric_path"]["name"]))
                {
                    // * config* //
                    $config2['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config2['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config2['overwrite'] = TRUE;
                    $this->load->library('upload', $config2);
                    // * config* //

                    $apl_nric_data = $_FILES["nric_path"]["name"];

                    if(! $this->upload->do_upload("nric_path"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        $apl_nric_path  =   'assets/userDocs/appl_photo/'.$apl_nric_data;
                    }
                }else{

                        $apl_nric_path  =   $_POST['nric_path_prev'];    
                }


                $pp_no          =       $_POST['apl_pp_no'];

                if(!empty($_FILES["pp_no"]["name"]))
                {
                    // * config* //
                    $config3['upload_path']  = FCPATH.'assets/userDocs/appl_photo';

                    $config3['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config3['overwrite'] = TRUE;
                    $this->load->library('upload', $config3);
                    // * config* //

                    $pp_no_data = $_FILES["pp_no"]["name"];

                    if(! $this->upload->do_upload("pp_no"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("pp_no_path"  => 'assets/userDocs/'.$pp_no_data);
                        $pp_no_path  =   'assets/userDocs/appl_photo/'.$pp_no_data;
                    }
                }
                else
                    {
                        $pp_no_path  =  $_POST['appl_pp_path_prev'];
                    }

                $apl_dob        =       $_POST['apl_dob'];

                $apl_gen        =       $_POST['apl_gen'];

                $apl_adr        =       $_POST['apl_adr'];

                $apl_ntn        =       $_POST['apl_ntl'];  
                
                $apl_job_pos    =       $_POST['job_pos'];              

                $apl_cnct       =       $_POST['cnt_fxd'];

                $apl_mob        =       $_POST['cnt_mob'];

                $apl_email      =       $_POST['apl_email'];

                //Next of Kin Details
                $kin_name       =       $_POST['kin_name'];

                $kin_mid_name   =       $_POST['kin_mid_name'];

                $kin_lst_name   =       $_POST['kin_lst_name'];

                $kin_nric       =       $_POST['kin_nric'];

                if(!empty($_FILES["kin_nric_path"]["name"]))
                {
                    // * config* //
                    $config4['upload_path']  = FCPATH.'assets/userDocs/appl_photo';


                    $config4['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config4['overwrite'] = TRUE;
                    $this->load->library('upload', $config4);
                    // * config* //

                    $kin_nric_data = $_FILES["kin_nric_path"]["name"];

                    if(! $this->upload->do_upload("kin_nric_path"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_pp_path"  => 'assets/userDocs/'.$kin_pp_data);
                        $kin_nric_path1  =   'assets/userDocs/appl_photo/'.$kin_nric_data;
                    }
                }
                else{

                        $kin_nric_path1 = $_POST['kin_nric_path_prev'];
                }

                $kin_pp         =       $_POST['kin_pp'];

                if(!empty($_FILES["kin_pp"]["name"]))
                {
                    // * config* //
                    $config5['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    if(!is_dir($config5['upload_path'])) 
                    {
                        mkdir($config5['upload_path'],0777,TRUE);
                    }
                    $config5['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config5['overwrite'] = TRUE;
                    $this->load->library('upload', $config5);
                    // * config* //

                    $kin_pp_data = $_FILES["kin_pp"]["name"];

                    if(! $this->upload->do_upload("kin_pp"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_pp_path"  => 'assets/userDocs/'.$kin_pp_data);
                        $kin_pp_path  =   'assets/userDocs/appl_photo/'.$kin_pp_data;
                    }
                }
                else
                {
                    $kin_pp_path = $_POST['kin_pp_path_prev'];
                }

                $kin_dob       =       $_POST['kin_dob'];

                $kin_gen       =       $_POST['kin_gen'];

                $reln          =       $_POST['reln'];

                $kin_cnct      =       $_POST['kin_cnct'];

                $kin_mob       =       $_POST['kin_mob'];

                $kin_adr       =       $_POST['kin_adr'];

                $kin_ntnl      =       $_POST['kin_ntn'];

                $kin_email     =       $_POST['kin_email'];
                
                //Medical Details
                $med_cntr      =       $_POST['med_crt'];

                $med_crt_no    =       $_POST['med_crt_no'];

                $ame_name      =       $_POST['ame_name'];

                $ame_no        =       $_POST['ame_no'];

                $exam_dt       =       $_POST['exam_dt'];

                $bld_grp       =       $_POST['bld_grp'];

                $alergies      =       $_POST['alergies'];

                $alg_dtl       =       $_POST['alg_dtl'];

                $med_exp_dt    =       $_POST['mexp_dt']; 

                if(!empty($_FILES["kin_med_cert"]["name"]))
                {
                    // * config* //
                    $config6['upload_path']  = FCPATH.'assets/userDocs/appl_photo';

                    if(!is_dir($config6['upload_path'])) 
                    {
                        mkdir($config6['upload_path'],0777,TRUE);
                    }

                    $config6['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config6['overwrite'] = TRUE;
                    $this->load->library('upload', $config6);
                    // * config* //

                    $kin_med_cert_data = $_FILES["kin_med_cert"]["name"];

                    if(! $this->upload->do_upload("kin_med_cert"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_med_cert_path"  => 'assets/userDocs/'.$kin_med_cert_data);
                        $kin_med_cert_path  =   'assets/userDocs/appl_photo/'.$kin_med_cert_data;
                    }
                }else{

                        $kin_med_cert_path  =  $_POST['med_cert_path_prev'];
                }

                //Bosiet Details

                $inst_name      =   $_POST['inst_name'];

                $inst_adr       =   $_POST['inst_adr'];

                $course_tit     =   $_POST['course_tit'];

                $inst_cert_no   =   $_POST['inst_cert_no'];

                $trn_frm_dt     =   $_POST['atnd_from'];

                $trn_to_dt      =   $_POST['atnd_to'];

                $hexp_dt        =   $_POST['hexp_dt'];


                if(!empty($_FILES["kin_huet_cert"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
                    // * config* //

                    $kin_huet_cert_data = $_FILES["kin_huet_cert"]["name"];

                    if(! $this->upload->do_upload("kin_huet_cert"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_huet_cert_path"  => 'assets/userDocs/'.$kin_huet_cert_data);
                        $kin_huet_cert_path  =   'assets/userDocs/appl_photo/'.$kin_huet_cert_data;
                    }
                }else{

                        $kin_huet_cert_path  =  $_POST['huit_cert_path_prev'];
                }
                 
                $remarks        =       $_POST['remarks'];
                
                $modified_by    = $this->session->userdata('login')->user_id;

                $modified_dt    = date('y-m-d H:i:s');

                $adminStatus        =       $_POST['adminStatus'];
                $adminRemarks       =       $_POST['adminRemarks'];

                $updateValue    = array('modified_by'    =>  $modified_by,

                                        'modified_dt'    =>  $modified_dt,     

                                    'org_type'      =>  $org_type,

                                    'org_name'      =>  $org_name,

                                    'org_address'   =>  $org_adr,

                                    'org_web_add'   =>  $org_web,

                                    'org_ph_no'     =>  $org_cnct,

                                    'your_f_name'   =>  $yf_name,

                                    'your_m_name'   =>  $ym_name,

                                    'your_l_name'   =>  $yl_name,

                                    'your_position' =>  $y_ypt,

                                    'your_email'    =>  $y_email,

                                    'your_cnct'     =>  $y_cnct,

                                    'sponsor_name'  =>  $spn_name,

                                    'sponsor_dept'  =>  $spn_dept,

                                    'appl_name'     =>  $apl_name,

                                    'appl_mid_name' =>  $apl_mname,

                                    'appl_last_name'=>  $apl_lname,

                                    'appl_photo_path'   =>  $apl_name_path,

                                    'position_title'    =>  $apl_pos_tit,

                                    'nric_no'           =>  $apl_nric_no,

                                    'nric_path'         =>  $apl_nric_path,

                                    'applcnt_dob'       =>  $apl_dob,

                                    'applcnt_pasprt_no' =>  $pp_no,

                                    'appl_pp_path'      =>  $pp_no_path,

                                    'gender'            =>  $apl_gen,

                                    'appl_nation'       =>  $apl_ntn,

                                    'applcnt_add'       =>  $apl_adr,

                                    'applcnt_email'     =>  $apl_email,

                                    'job_pos_tit'       =>  $apl_job_pos,

                                    'apl_cnt_fxd'       =>  $apl_cnct,

                                    'apl_cnt_mob'       =>  $apl_mob,

                                    'kin_name'          =>  $kin_name,

                                    'kin_mid_name'      =>  $kin_mid_name,

                                    'kin_last_name'     =>  $kin_lst_name,

                                    'kin_nric_no'       =>  $kin_nric,

                                    'kin_nric_path'     =>  $kin_nric_path1,

                                    'kin_add'           =>  $kin_adr,

                                    'kin_dob'           =>  $kin_dob,

                                    'kin_ph'            =>  $kin_cnct,

                                    'kin_mob'           =>  $kin_mob,

                                    'kin_email'         =>  $kin_email,

                                    'kin_gender'        =>  $kin_gen,

                                    'kin_nation'        =>  $kin_ntnl,

                                    'kin_psprt_no'      =>  $kin_pp,

                                    'kin_pp_path'       =>  $kin_pp_path,

                                    'applcnt_kin_reltion' =>    $reln,

                                    'med_center'          =>    $med_cntr,

                                    'med_cert_no'         =>    $med_crt_no,

                                    'ame_name'            =>    $ame_name,

                                    'ame_no'              =>    $ame_no,

                                    'exam_dt'             =>    $exam_dt,

                                    'blood_grp'           =>    $bld_grp,

                                    'alergies'            =>    $alergies,

                                    'alergy_dtls'         =>    $alg_dtl,

                                    'med_exp_dt'          =>    $med_exp_dt,

                                    'med_cert_path'       =>    $kin_med_cert_path,

                                    'inst_name'           =>    $inst_name,

                                    'inst_adr'            =>    $inst_adr,

                                    'course_title'        =>    $course_tit,

                                    'tr_cert_no'          =>    $inst_cert_no,

                                    'attend_dt_from'      =>    $trn_frm_dt,

                                    'attend_dt_to'        =>    $trn_to_dt,

                                    'huit_exp_dt'         =>    $hexp_dt,
                                    
                                    'huit_cert_path'      =>    $kin_huet_cert_path,

                                    'remarks'             =>    $remarks,

                                    'admin_remarks'       =>    $adminRemarks,

                                    'status'              =>    $adminStatus
                                );


                //$appl_no            =       $_POST['appl_no'];


                $updateValue1 = array('modified_by'    =>  $modified_by,
                                    'modified_dt'    =>  $modified_dt, 
                                    'admin_remarks' => $adminRemarks,
                                    'status' => $adminStatus);

                $this->AdminApps->adminStatusUpdation($updateValue1, $appl_no);

                if($adminStatus=='A'){
                    $status = "Approved";
                }elseif($adminStatus=='H'){
                    $status = "Hold";
                }elseif($adminStatus=='R'){
                    $status = "Rejected";
                }

                $this->send_cnf_mail($apl_email,$appl_no,$status,$apl_name);

                switch($adminStatus)
                {

                    case 'A':
                        echo "<script> alert('Successfully Approved');
                        document.location= 'application' </script>";
                        break;

                    case 'H':
                        echo "<script> alert('Application has been hold');
                        document.location= 'application' </script>";
                        break;

                    case 'R':
                        echo "<script> alert('Application has been rejected');
                        document.location= 'application' </script>";
                        break;


                }

            }

        }

        //for sending mail -- 
		public function send_cnf_mail($userId,$appl_no,$status,$name){

            

            $message="Dear ".$name.",\r\nYour application no. ".$appl_no." has been ".$status."\r\n\r\n Please log on to http://esafepass.com/ for details.\r\n"."\r\n\r\nThanks\r\nAdmin Team";
            $subject="Safepass Application Status";

            
            $this->load->library('SendEmail');
            $this->SendEmail->send_email($userId,$message,$subject);
           

        }





        // for download options-- 
        public function downloadDocs()
        {

            $appl_no    =   $this->input->get('appl_no');
            $sl_no      =   $this->input->get('sl_no');

            $downloadLinks['link'] = $this->AdminApps->f_get_downloadLink($appl_no);
            $downloadLinks['applNo'] = $appl_no;

            $this->load->view('admin/downloadList', $downloadLinks);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }

        public function downloadItem()
        {

            $appl_no    =   $this->input->get('aplNo');
            $item       =   $this->input->get('item'); 
            $sl_no      =   $this->input->get('sl_no')+1;

            $itemPath = $this->AdminApps->f_get_download_itemPath($appl_no, $item, $sl_no);
            $item_path = $itemPath->$item;
            
            if($item_path != '')
			{
                $this->load->helper('download'); 

                $name = $appl_no.'_'.$sl_no;
				$path    =   file_get_contents(base_url($item_path));
				 
				force_download($name, $path);

				return true;

			}

        }


        



    }

?>