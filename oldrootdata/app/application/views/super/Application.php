<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Application extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

            $this->load->model('Applications');

            $this->load->model('Process');

            // For pdf converter -- 
            $this->load->library('Pdf');

            $link['title']  = 'Application';

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

        public function apln(){

            //Application List

            $userId 					 = $this->session->userdata('login')->user_id;
        
            $application['appl_dtls']    = $this->Applications->applDtls($userId);


            $this->load->view("application/aplnList", $application);

            $script['script'] = [
                
                '/assets/plugins/footable/js/footable.all.min.js',

                '/assets/plugins/bootstrap-select/bootstrap-select.min.js'
            
            ];

            $this->load->view('dashboard/footer', $script);
            
        }

        //Leave New Add Form
        public function add()
        {
            
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                //Organisation Details
                $org_type       =       $_POST['org_type'];   

                $org_name       =       $_POST['org_name'];

                $org_adr        =       $_POST['org_adr'];

                $org_cnct       =       $_POST['org_cnct'];

                //$org_email      =       $_POST['org_email'];

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
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
                    // * config* //

                    $apl_name_data = $_FILES["apl_name_path"]["name"];

                    if(! $this->upload->do_upload("apl_name_path"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        $apl_name_path  =   'assets/userDocs/appl_photo/'.$apl_name_data;
                    }
                }

                $apl_pos_tit    =       $_POST['pos_tit'];

                $apl_nric_no    =       $_POST['nric_no'];

                if(!empty($_FILES["nric_path"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
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
                }

                $pp_no          =       $_POST['apl_pp_no'];

                if(!empty($_FILES["pp_no"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
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
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
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

                $kin_pp         =       $_POST['kin_pp'];

                if(!empty($_FILES["kin_pp"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
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
                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
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
                }

                

                



                /*$h2sExp_dt      =       $_POST['h2sExp_dt']; 

                if(!empty($_FILES["kin_h2s_cert"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/userDocs/h2s_cert';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
                    // * config* //

                    $kin_h2s_cert_data = $_FILES["kin_h2s_cert"]["name"];

                    if(! $this->upload->do_upload("kin_h2s_cert"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_h2s_cert_path"  => 'assets/userDocs/'.$kin_h2s_cert_data);
                        $kin_h2s_cert_path  =   'assets/userDocs/'.$kin_h2s_cert_data;
                    }
                }*/

                $remarks        =       $_POST['remarks'];


                $slNo   = $this->Applications->f_get_maxSlNo_for_applcation();

                $sl_no  = $slNo->sl_no+1;

                $aplNo  = str_pad($sl_no,5,"0",STR_PAD_LEFT);

                
                $userId = $this->session->userdata('login')->user_id;

                $crDt   = date('Y-m-d h:i:s');

                $insertValue = array(
                                    'user_id'       =>  $userId,

                                    'created_by'    =>  $userId,

                                    'created_dt'    =>  $crDt,     

                                    'sl_no'         =>  $sl_no,

                                    'appl_no'       =>  $aplNo,

                                    'appl_dt'       =>  date('Y-m-d'),

                                    'org_type'      =>  $org_type,

                                    'org_name'      =>  $org_name,

                                    'org_address'   =>  $org_adr,

                                    //'org_email'     =>  $org_email,

                                    'org_web_add'   =>  $org_web,

                                    'org_ph_no'     =>  $org_cnct,

                                    'appl_for'      =>  $apl_for,

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

                                    'remarks'             =>    $remarks
                );

                
                $this->Applications->f_insert_applcationDtls($insertValue);
            

                //redirect('Application/apln');
                redirect('training/add?appl_no='.$aplNo.'&sl_no='.$sl_no.'');

            }
            
            //Forwarding Null Value to view

            $data['country'] = $this->Applications->f_get_country();
             
            $this->load->view('application/form',$data);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }


        public function edit()
        {

            $appl_no        =       $this->input->get('appl_no');
            
            $editData['data1'] = $this->Applications->f_get_application_editData($appl_no);
            //$editData['data2'] = $this->Applications->f_get_application_editData($appl_no);

            $editData['country'] = $this->Applications->f_get_country();


            $this->load->view('application/formEdit', $editData);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

            
        }


        public function update()
        {

            if($_SERVER['REQUEST_METHOD'] == "POST")
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

                if ($_POST['appl_status']=='R'){

                    $status = 'J';
                }
                else
                {
                    $status = $_POST['appl_status'];
                }
                //echo $status; die;
                 
                $remarks        =       $_POST['remarks'];
                
                $modified_by    = $this->session->userdata('login')->user_id;

                $modified_dt    = date('y-m-d H:i:s');

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

                                        'status'              =>    $status
                                    );

                
                $this->Applications->f_update_applcationDtls($updateValue, $appl_no);
            

                redirect('Application/apln');
                }
        }


        //}

        //}


        public function delete()
        {

            $appl_no    =       $this->input->get('appl_no');
            $sl_no      =       $this->input->get('sl_no');
            
            $this->Applications->f_delete_application($sl_no, $appl_no);
            redirect('Application/apln');

        }


        // For other documents uplodation 
        public function uploadDocs()
        {
            
            $appl_no    =       $this->input->get('appl_no');
            $sl_no    =       $this->input->get('sl_no');

            if($_SERVER['REQUEST_METHOD'] != "POST")
            {
                
                $prevUploadRow              =   $this->Applications->f_check_prevUploadDtls($appl_no);
                $checkVal = $prevUploadRow->num_row;

                $uploadData['data']         =   $this->Applications->f_get_uploadDtls($appl_no, $sl_no);
                
                if($checkVal != 0)
                {

                    $uploadData['prevData'] =   $this->Applications->f_get_prevUploadDtls($appl_no);
                    
                }

                $this->load->view('application/uploadForm', $uploadData);

                $script['script'] = [

                    "/assets/plugins/moment/moment.js",

                    "/assets/plugins/daterangepicker/daterangepicker.js",

                    "/js/moduleValidations.js"

                ];

                $this->load->view('dashboard/footer', $script);

            }



            // For inserting or update
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $sl_no          =       $_POST['sl_no'];
                $appl_name      =       $_POST['appl_name'];
                $appl_no        =       $_POST['appl_no'];

                $prevUploadRow              =   $this->Applications->f_check_prevUploadDtls($appl_no);
                $checkVal = $prevUploadRow->num_row;

                // * config* //
                $config1['upload_path']  = FCPATH.'assets/userDocs/oth_photo';
                if(!is_dir($config1['upload_path'])) 
                {
                    mkdir($config1['upload_path'],0777,TRUE);
                }
                $config1['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
                $config1['overwrite'] = TRUE;
                $this->load->library('upload', $config1);
                // * config* //

                $oth_item1       =       $_POST['oth_item1'];
                if(!empty($_FILES["oth_sup_doc1"]["name"]))
                {

                    $apl_name_data1 = $_FILES["oth_sup_doc1"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc1"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path1  =   'assets/userDocs/oth_photo/'.$apl_name_data1;
                    }
                }
                else
                {
                   $apl_name_path1  =   $_POST['oth_item1_path'];
                }


                $oth_item2       =       $_POST['oth_item2'];
                if(!empty($_FILES["oth_sup_doc2"]["name"]))
                {
                    
                    $apl_name_data2 = $_FILES["oth_sup_doc2"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc2"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path2  =   'assets/userDocs/oth_photo/'.$apl_name_data2;
                    }
                }
                else
                {
                   $apl_name_path2  =   $_POST['oth_item2_path'];
                }


                $oth_item3       =       $_POST['oth_item3'];
                if(!empty($_FILES["oth_sup_doc3"]["name"]))
                {
                    
                    $apl_name_data3 = $_FILES["oth_sup_doc3"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc3"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path3  =   'assets/userDocs/oth_photo/'.$apl_name_data3;
                    }
                }
                else
                {
                   $apl_name_path3  =   $_POST['oth_item3_path'];
                }

                $oth_item4       =       $_POST['oth_item4'];
                if(!empty($_FILES["oth_sup_doc4"]["name"]))
                {
                    
                    $apl_name_data4 = $_FILES["oth_sup_doc4"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc4"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path4  =   'assets/userDocs/oth_photo/'.$apl_name_data4;
                    }
                }
                else
                {
                   $apl_name_path4  =   $_POST['oth_item4_path'];
                }


                $oth_item5       =       $_POST['oth_item5'];
                if(!empty($_FILES["oth_sup_doc5"]["name"]))
                {
                    
                    $apl_name_data5 = $_FILES["oth_sup_doc5"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc5"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path5  =   'assets/userDocs/oth_photo/'.$apl_name_data5;
                    }
                }
                else
                {
                   $apl_name_path5  =   $_POST['oth_item5_path'];
                }


                $oth_item6       =       $_POST['oth_item6'];
                if(!empty($_FILES["oth_sup_doc6"]["name"]))
                {
                    
                    $apl_name_data6 = $_FILES["oth_sup_doc6"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc6"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path6  =   'assets/userDocs/oth_photo/'.$apl_name_data6;
                    }
                }
                else
                {
                   $apl_name_path6  =   $_POST['oth_item6_path'];
                }


                $oth_item7       =       $_POST['oth_item7'];
                if(!empty($_FILES["oth_sup_doc7"]["name"]))
                {
                    
                    $apl_name_data7 = $_FILES["oth_sup_doc7"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc7"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path7  =   'assets/userDocs/oth_photo/'.$apl_name_data7;
                    }
                }
                else
                {
                   $apl_name_path7 =   $_POST['oth_item7_path'];
                }


                $oth_item8       =       $_POST['oth_item8'];
                if(!empty($_FILES["oth_sup_doc8"]["name"]))
                {
                    
                    $apl_name_data8 = $_FILES["oth_sup_doc8"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc8"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $apl_name_path8  =   'assets/userDocs/oth_photo/'.$apl_name_data8;
                    }
                }
                else
                {
                   $apl_name_path8  =   $_POST['oth_item8_path'];
                }

                $remarks        =       $_POST['remarks'];

                $insertValue = array(
                                    'appl_no' => $appl_no,
                                    'oth_item1' => $oth_item1,
                                    'oth_item1_path' => $apl_name_path1,
                                    'oth_item2' => $oth_item2,
                                    'oth_item2_path' => $apl_name_path2,
                                    'oth_item3' => $oth_item3,
                                    'oth_item3_path' => $apl_name_path3,
                                    'oth_item4' => $oth_item4,
                                    'oth_item4_path' => $apl_name_path4,
                                    'oth_item5' => $oth_item5,
                                    'oth_item5_path' => $apl_name_path5,
                                    'oth_item6' => $oth_item6,
                                    'oth_item6_path' => $apl_name_path6,
                                    'oth_item7' => $oth_item7,
                                    'oth_item7_path' => $apl_name_path7,
                                    'oth_item8' => $oth_item8,
                                    'oth_item8_path' => $apl_name_path8,
                                    'remarks' => $remarks );
                
                if($checkVal == 0)
                {
                    $this->Applications->f_insert_othDtls($insertValue);
                }
                else
                {
                    $this->Applications->f_update_othDtls($insertValue, $appl_no);
                }

                redirect('Application/apln');

            }


        }


        public function getPass()
        {

            $appl_no = $this->input->get('appl_no');
            
            $passData['data'] = $this->Applications->f_get_application_editData($appl_no);

            $content = '';
            $content1 = '';
            //$content .= '<br>';
            
            foreach($passData['data'] as $key)
            {
                
                $passKey = $key->appl_no.'/Pass-'.$key->sl_no;

                $content .= '<div style="text-align:center;"><caption>***Company Name***</caption></div>';
                $content .= '<br>';
                $content .= '<div width= "10%" style="text-align:center;">
                                
                                <img style= "border-radius: 100px;" src= "'.base_url($key->appl_photo_path).'" >
                                
                            </div>';

                $content .= '<table width= "100%" style="text-align:center;">

                                <tr>

                                    <td>
                                        <p> <b>Application No : </b>'.$key->appl_no.'</p>
                                        <p> <b>Applicant Name : </b>'.$key->appl_name.'</p>
                                        <p> <b>Organisation : </b>'.$key->org_name.'</p>
                                        <p> <b>BOSIET/HUET Expiry Date : </b>'.date("d-m-Y",strtotime($key->huit_exp_dt)).'</p>
                                        <p> <b>Medical Examination Expiry date : </b>'.date('d-m-Y',strtotime($key->med_exp_dt)).'</p>
                                        <p> <b>Pass : </b>'.$passKey.'</p>
                                    </td>

                                </tr>
                        
                            </table>';

                //$logoPath = base_url('assets/images/safepass.jpg');
                $logoPath = base_url('assets/images/logoSafe.png');

                $content1 = '<html>';

                $content1 .= '<body>';
                $content1 .= '<div style= "overflow: hidden; background-color: #f1f1f1; line-height: 5px;">';
                $content1 .= '<p><img style= "width: 150px;  text-align: left;"  src= "'.$logoPath.'"/>';            
                //$content1 .= '<div style= "text-align: right;" >';
                $content1 .= '<span style= "color: #23527c; padding-left: 80px; font-size: 20px; text-align: right;" >         Vestigo Petroleum Sdn Bhd</span></p>';
                //$content1 .= '</div></p>';
                $content1 .= '</div>';

                $content1 .= '<br><br>';
                $content1 .= '<div class= "inline" style= "margin-top= 10px;" align="right">';
                    $content1 .= '<p><img align="center" src= "'.base_url($key->appl_photo_path).'" width= "150" height= "150" alt= "applicant image" style= "float: right;" /></p>';
                $content1 .= '</div>';
                $content1 .= '<div margin-top: 100px; margin-bottom: 100px; margin-right: 150px; margin-left: 80px;>';
                $content1 .= '<div align="left">';
                    $content1 .= '<p><span style= "font-size: 15px; "><strong>Safepass No : </strong></span> '.$key->appl_no.'</p>';
                    $content1 .= '<p><span style= "font-size: 15px;"><strong>Applicant Name : </strong></span> '.$key->appl_name.' '.$key->appl_mid_name.' '.$key->appl_last_name.'</p>';
                    $content1 .= '<p><span style= "font-size: 15px;"><strong>NRIC / Passport No : </strong></span> '.$key->applcnt_pasprt_no.'</p>';
                    $content1 .= '<p><span style= "font-size: 15px;"><strong>Blood Group : </strong></span> '.$key->blood_grp.'</p>';
                    $content1 .= '<p><span style= "font-size: 15px;"><strong>Medical Validity : </strong></span> '.date("d-m-Y",strtotime($key->med_exp_dt)).'</p>';
                    $content1 .= '<p><span style= "font-size: 15px;"><strong>Training Validity : </strong></span>'.date("d-m-Y",strtotime($key->huit_exp_dt)).'</p>';
                $content1 .= '</div>';
                $content1 .= '</div>';

                $content1 .= '<div style= "text-align:center;">';
                $content1 .= '<p style= "font-size: 10px;">*************************************************************************************************************************</p>';
                $content1 .= '<p style= "font-size: 10px;">This Safety Pass belongs to Vestigo Petroleum Sdn Bhd. If found, please return to Vestigo Petroleum Sdn Bhd, Level 13 Menara Binjai, Jln Binjai, Kuala Lumpur, 50450 Kuala Lumpur.</p>';
                $content1 .= '<p style= "font-size: 10px;">Contact: 03-2776 9999</p>';
                $content1 .= '</div>';

                $content1 .= '</body>';
                $content1 .= '</html>';


                //$html_content = "<table><tr><td>Customer Name:</td><td style='color:blue;'>Suneel</td><td>Approved By:</td><td style='color:green;'>Srinu</td></tr></table></hr>";    
                

                $content2 = '<!DOCTYPE html>
                                <html lang="zxx">
                                <head>
        
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                <meta name="keywords" content="Revenue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
                                
                                <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
                        
                                <link rel="stylesheet" href="css/smoothbox.css" type="text/css" media="all" />
                                
                                <link rel="stylesheet" href="css/jquery.desoslide.css">
                                <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
                                <link href="css/font-awesome.css" rel="stylesheet">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                            
                            
                                <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
                            
                            </head>';

                $content2 .= '<body>
                                <div class="top-nav">
                                
                                    <div class="container">
                            
                                        <div class="navbar-top">
                                            <div class="nav-top-left" style="margin-left: 20%;">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="log" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url("assets/images/safepass.jpg"); ?>" width="100" height="50"  alt="" class="img-fluid logo-img mt-1"></a>
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                            <div class="nav-top">
                                                <ul>
                                                    <li>

                                                    <a  class="act" style="margin-left:70px;font-size:40px;font-family: Arial, Helvetica, sans-serif;text-align: center;">Company Name</a></li>
                                                
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    
                                <div id="loan" class="loan">
                                    <div class="container text-center">
                                        <div class="nav">
                                            <ul>
                                                <li>
                                                    <a href="#" class="log" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url("assets/images/safepass.jpg"); ?>" width="200" height="200"  alt="" class="img-fluid logo-img mt-1 img-circle"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                        
                        
                            <div>
                                    <div class="container text-center" >
                                        <a style="font-size:12px;color:#000;">Applicant Name:&nbsp    .....................................................</a>
                                        <br>
                                        <a  style="font-size:12px;color:#000;">Organisation Name:&nbsp.....................................................</a>
                                        <br>
                                        <a  style="font-size:12px;color:#000;">BOSI: &nbsp..................................................................</a>
                                        <br>
                                        <a  style="font-size:12px;color:#000;">Date: &nbsp..................................................................</a>
                                    </div>
                        
                                </div>
                                    
                            </body>

                            </html>';


            }

            
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle($appl_no);
            $pdf->SetHeaderMargin(20);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            
            $pdf->AddPage();
            //$pdf->footertext($html_content);
           $pdf->WriteHTML($content1, true, 0, true, 0);
           $pdf->lastPage();
            
        $pdf->Output('Pas/'.$appl_no, 'I');


        }














    }


?>