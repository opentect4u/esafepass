<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Application extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

             $this->load->library('session'); 

            $this->load->model('Applications');

            $this->load->model('Trainings');

            $this->load->model('Process');

            $this->load->library('upload');

            $this->load->library('email');

            // For pdf converter -- 
            //$this->load->library('Pdf');

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
        public function add(){

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

                                    'sponsor_dept'  =>  $spn_dept
   

                );

                
                $this->Applications->f_insert_applcationDtls($insertValue);
            

                //redirect to form-II -> 
                redirect('application/addApplicant?appl_no='.$aplNo.'&sl_no='.$sl_no.'');

            }
            
            //Forwarding Null Value to view
            $data['country'] = $this->Applications->f_get_country();
             
            $this->load->view('application/form1',$data);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

        }


        // For handling second application 
        public function addApplicant(){

            $appl_no    =   $this->input->get('appl_no');
            $sl_no      =   $this->input->get('sl_no');


            if($_SERVER['REQUEST_METHOD'] == "POST"){  

                //Applicant Details
                $appl_no        =       $_POST['appl_no'];

                $sl_no          =       $_POST['sl_no'];

                $apl_name       =       $_POST['apl_name'];

                $apl_mname      =       $_POST['apl_mid_name'];

                $apl_lname      =       $_POST['apl_lst_name'];  
             
                if(!empty($_FILES["apl_name_path"]["name"])&& $_FILES['apl_name_path']['size'] < 3000000)
                { 
                    // * config* //
                    $apl_name_data = 'i'.time().$_FILES["apl_name_path"]["name"];

                    $config['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config['allowed_types'] = 'png|jpg|jpeg';
                    $config['overwrite'] = TRUE;
                    $config['file_name'] = $apl_name_data;

                    
                     $this->upload->initialize($config); 
                    
                    if(! $this->upload->do_upload("apl_name_path"))
                    {

                        $error = array('error' => 'Error in photo upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                       
                        redirect('Application/apln');

                    }
                    else
                    {
                        $this->upload->data();
                        $apl_name_path  =   'assets/userDocs/appl_photo/'.$apl_name_data;
                    }
                }else{

                    $apl_name_path = '';
                }

                $apl_pos_tit    =       $_POST['pos_tit'];

                $apl_nric_no    =       $_POST['nric_no'];

                if(!empty($_FILES["nric_path"]["name"])&& $_FILES['nric_path']['size'] < 3000000)
                {
                    // * config* //
                    $apl_nric_data = 'n'.time().$_FILES["nric_path"]["name"];
                    $config1['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config1['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config1['overwrite'] = TRUE;
                    $config1['file_name'] = $apl_nric_data;
                    
                    // * config* //
                     $this->upload->initialize($config1); 

                    if(! $this->upload->do_upload("nric_path"))
                    {
                        $error = array('error' => 'Error in NRIC doc upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);
                      

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $apl_nric_path  =   'assets/userDocs/appl_photo/'.$apl_nric_data;
                    }
                }else{

                    $apl_nric_path = '';
                }

                $pp_no          =       $_POST['apl_pp_no'];
                
                if(!empty($_FILES["pp_no"]["name"])&& $_FILES['pp_no']['size'] < 3000000)
                {
                    // * config* //

                    $pp_no_data = 'p'.time().$_FILES["pp_no"]["name"];
                    $config2['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    $config2['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config2['overwrite'] = TRUE;
                    $config2['file_name'] = $pp_no_data;
                    
                    // * config* //
                     $this->upload->initialize($config2); 
                   

                    if(! $this->upload->do_upload("pp_no"))
                    {
                        $error = array('error' => 'Error in passport doc upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);
                      
                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $pp_no_path  =   'assets/userDocs/appl_photo/'.$pp_no_data;
                    }
                }else{

                    $pp_no_path = '';
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

                if(!empty($_FILES["kin_nric_path"]["name"])&& $_FILES['kin_nric_path']['size'] < 3000000)
                {
                //     // * config* //

                    $kin_nric_data = 'kn'.time().$_FILES["kin_nric_path"]["name"];

                    $config3['upload_path']   = FCPATH.'assets/userDocs/appl_photo';
                    $config3['allowed_types'] = 'png|jpg|jpeg|pdf';

                    $config3['overwrite']     = TRUE;
                    $config3['file_name']     = $kin_nric_data;
                    $this->load->library('upload', $config3);
                    // * config* //

                    

                    if(! $this->upload->do_upload("kin_nric_path"))
                    {
                        $error = array('error' => 'Error in kin NRIC doc upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_pp_path"  => 'assets/userDocs/'.$kin_pp_data);
                        $kin_nric_path1  =   'assets/userDocs/appl_photo/'.$kin_nric_data;
                    }
                }else{

                    $kin_nric_path1 = '';
                }

                $kin_pp         =       $_POST['kin_pp'];

                if(!empty($_FILES["kin_pp"]["name"])&& $_FILES['kin_pp']['size'] < 3000000)
                {
                    // * config* //

                    $kin_pp_data = 'kp'.time().$_FILES["kin_pp"]["name"];

                    $config4['upload_path']   = FCPATH.'assets/userDocs/appl_photo';
                    $config4['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config4['overwrite']     = TRUE;
                    $config4['file_name']     = $kin_pp_data;
                    //$this->load->library('upload', $config4);
                    // * config* //
                   $this->upload->initialize($config4); 

                    if(! $this->upload->do_upload("kin_pp"))
                    {
                        $error = array('error' => 'Error in kin passport doc upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_pp_path"  => 'assets/userDocs/'.$kin_pp_data);
                        $kin_pp_path  =   'assets/userDocs/appl_photo/'.$kin_pp_data;
                    }
                }else{

                    $kin_pp_path = '';
                }

                $kin_dob       =       $_POST['kin_dob'];

                $kin_gen       =       $_POST['kin_gen'];

                $reln          =       $_POST['reln'];

                $kin_cnct      =       $_POST['kin_cnct'];

                $kin_mob       =       $_POST['kin_mob'];

                $kin_adr       =       $_POST['kin_adr'];

                $kin_ntnl      =       $_POST['kin_ntn'];

                $kin_email     =       $_POST['kin_email'];


                $value = array(
                    'appl_name'         =>  $apl_name,

                    'appl_mid_name'     =>  $apl_mname,

                    'appl_last_name'    =>  $apl_lname,

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

                    'applcnt_kin_reltion' =>    $reln 
                );


                $this->Applications->f_insert_nextFormDtls($value, $appl_no, $sl_no);
            
                //redirect to form-III -> 
                redirect('application/addCertificate?appl_no='.$appl_no.'&sl_no='.$sl_no.'');

            }
            else
            {

                $data['country'] = $this->Applications->f_get_country();
                $data['appl_no'] = $appl_no;
                $data['sl_no']   = $sl_no;

                $this->load->view('application/form2',$data);

                $script['script'] = [

                    "/assets/plugins/moment/moment.js",

                    "/assets/plugins/daterangepicker/daterangepicker.js",

                    "/js/moduleValidations.js"

                ];

                $this->load->view('dashboard/footer', $script);

            }

        }


        // For III Form handling -> 
        public function addCertificate(){

            $appl_no     =      $this->input->get('appl_no');
            $sl_no       =      $this->input->get('sl_no');

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $appl_no        =       $_POST['appl_no'];

                $sl_no          =       $_POST['sl_no'];

                //Medical Details
                $med_cntr       =       $_POST['med_crt'];

                $med_crt_no     =       $_POST['med_crt_no'];

                $ame_name       =       $_POST['ame_name'];

                $ame_no         =       $_POST['ame_no'];

                $exam_dt        =       $_POST['exam_dt'];

                $bld_grp        =       $_POST['bld_grp'];

                $alergies       =       $_POST['alergies'];

                $alg_dtl        =       $_POST['alg_dtl'];

                $med_exp_dt     =       $_POST['mexp_dt']; 

                if(!empty($_FILES["kin_med_cert"]["name"])&& $_FILES['kin_med_cert']['size'] < 3000000)
                {
                    // * config* //
                    $kin_med_cert_data =      'kin_med_cert'.time().$_FILES["kin_med_cert"]["name"];
                    $config['upload_path']    = FCPATH.'assets/userDocs/certificate';
                    $config['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config['overwrite']      = TRUE;
                    $config['file_name']      = $kin_med_cert_data;

                    $this->upload->initialize($config); 
                    // * config* //

                    if(! $this->upload->do_upload("kin_med_cert"))
                    {
                        $error = array('error' => 'Error in kin medical certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_med_cert_path"  => 'assets/userDocs/'.$kin_med_cert_data);
                        $kin_med_cert_path  =   'assets/userDocs/certificate/'.$kin_med_cert_data;
                    }
                }else{

                    $kin_med_cert_path = '';
                }

                
                //Bosiet Details

                $inst_name      =   $_POST['inst_name'];

                $inst_adr       =   $_POST['inst_adr'];

                $course_tit     =   $_POST['course_tit'];

                $inst_cert_no   =   $_POST['inst_cert_no'];

                $trn_frm_dt     =   $_POST['atnd_from'];

                $trn_to_dt      =   $_POST['atnd_to'];

                $hexp_dt        =   $_POST['hexp_dt'];

                if(!empty($_FILES["kin_huet_cert"]["name"])&& $_FILES['kin_huet_cert']['size'] < 3000000)
                {
                    // * config* //

                    $kin_huet_cert_data     = 'kin_huet_cert'.time().$_FILES["kin_huet_cert"]["name"];
                    $config1['upload_path']  = FCPATH.'assets/userDocs/certificate';
                    $config1['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config1['overwrite'] = TRUE;
                    $config1['file_name']      = $kin_huet_cert_data;
                    $this->upload->initialize($config1); 
                    // * config* //


                    if(! $this->upload->do_upload("kin_huet_cert"))
                    {
                        $error = array('error' => 'Error in kin Huet Certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_huet_cert_path"  => 'assets/userDocs/'.$kin_huet_cert_data);
                        $kin_huet_cert_path  =   'assets/userDocs/certificate/'.$kin_huet_cert_data;
                    }
                }else{

                    $kin_huet_cert_path = '';
                }

                $vrf_flg        =   $_POST['trn_vrf_flg'];

                if(!empty($_FILES["trn_vrf_cert_path"]["name"])&& $_FILES['trn_vrf_cert_path']['size'] < 3000000)
                {
                    // * config* //
                    $trn_vrf_cert_data        = 'trn_vrf_cert'.time().$_FILES["trn_vrf_cert_path"]["name"];
                    $config2['upload_path']    = FCPATH.'assets/userDocs/certificate';
                    $config2['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config2['overwrite']      = TRUE;
                    $config2['file_name']      = $trn_vrf_cert_data;
                    //$this->load->library('upload', $config);
                    $this->upload->initialize($config2); 
                    // * config* //

                   

                    if(! $this->upload->do_upload("trn_vrf_cert_path"))
                    {
                        $error = array('error' => 'Error in Verification Certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_huet_cert_path"  => 'assets/userDocs/'.$kin_huet_cert_data);
                        $trn_vrf_path  =   'assets/userDocs/certificate/'.$trn_vrf_cert_data;
                    }
                }else{

                    $trn_vrf_path = '';
                }


                $value = array(
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

                                'trn_vrf_flg'         =>    $vrf_flg,

                                'trn_vrf_cert_path'   =>    $trn_vrf_path,

                                'h2s_inst_name'       =>    $_POST['h2s_inst_name'],

                                'h2s_inst_adr'        =>    $_POST['h2s_inst_adr'],

                                'h2s_course'          =>    $_POST['h2s_course'],

                                'h2s_cert_no'         =>    $_POST['h2s_cert_no'],

                                'remarks'             =>    $_POST['remarks'],

                                'declaration'         =>    $this->input->post('declaration')
                );

                $this->Applications->f_insert_nextFormDtls($value, $appl_no, $sl_no);
            
                //redirect to training from -> 
                redirect('training/add?appl_no='.$appl_no.'&sl_no='.$sl_no.'');

            }
            else
            {

                $data['country'] = $this->Applications->f_get_country();
                $data['appl_no'] = $appl_no;
                $data['sl_no'] = $sl_no;

                $this->load->view('application/form3',$data);

                $script['script'] = [

                    "/assets/plugins/moment/moment.js",

                    "/assets/plugins/daterangepicker/daterangepicker.js",

                    "/js/moduleValidations.js"

                ];

                $this->load->view('dashboard/footer', $script);

            }

        }


        public function edit()
        {

            $appl_no        =       $this->input->get('appl_no');
            
            $editData['data1'] = $this->Applications->f_get_application_editData($appl_no);
            $editData['data2'] = $this->Applications->f_get_training_editData($appl_no);
            $editData['appl_no'] = $appl_no;

            $editData['country'] = $this->Applications->f_get_country();

            //$this->load->view('application/formEdit', $editData);

            $this->load->view('application/formEdit1', $editData);

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


                if ($_POST['appl_status']=='R'){

                    $status = 'J';
                }
                else
                {
                    $status = $_POST['appl_status'];
                }
                //echo $status; die;
                 
                //$remarks        =       $_POST['remarks'];
                
                $modified_by    = $this->session->userdata('login')->user_id;

                $modified_dt    = date('y-m-d H:i:s');


                /////////////////////////////////////////////////////
                                //For training part

                // $inst_name1         =       $_POST['inst_name1'];
                // $adr1               =       $_POST['adr1'];
                // $course1            =       $_POST['course1'];
                // $cert_no1           =       $_POST['cert_no1'];
                // $from_dt1           =       $_POST['from_dt1'];
                // $to_dt1             =       $_POST['to_dt1'];
                // $validity1          =       $_POST['validity1'];

                // $inst_name2         =       $_POST['inst_name2'];
                // $adr2               =       $_POST['adr2'];
                // $course2            =       $_POST['course2'];
                // $cert_no2           =       $_POST['cert_no2'];
                // $from_dt2           =       $_POST['from_dt2'];
                // $to_dt2             =       $_POST['to_dt2'];
                // $validity2          =       $_POST['validity2'];

                // $inst_name3         =       $_POST['inst_name3'];
                // $adr3               =       $_POST['adr3'];
                // $course3            =       $_POST['course3'];
                // $cert_no3           =       $_POST['cert_no3'];
                // $from_dt3           =       $_POST['from_dt3'];
                // $to_dt3             =       $_POST['to_dt3'];
                // $validity3          =       $_POST['validity3'];

                // $inst_name4         =       $_POST['inst_name4'];
                // $adr4               =       $_POST['adr4'];
                // $course4            =       $_POST['course4'];
                // $cert_no4           =       $_POST['cert_no4'];
                // $from_dt4           =       $_POST['from_dt4'];
                // $to_dt4             =       $_POST['to_dt4'];
                // $validity4          =       $_POST['validity4'];

                // $inst_name5         =       $_POST['inst_name5'];
                // $adr5               =       $_POST['adr5'];
                // $course5            =       $_POST['course5'];
                // $cert_no5           =       $_POST['cert_no5'];
                // $from_dt5           =       $_POST['from_dt5'];
                // $to_dt5             =       $_POST['to_dt5'];
                // $validity5          =       $_POST['validity5'];
               
                
                
                
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

                                    'status'              =>    $status
                                );

                
                $this->Applications->f_update_applcationDtls($updateValue, $appl_no);

                //redirect('Application/apln');
                redirect('Application/edit2?appl_no='.$appl_no);

            }

        }


        public function edit2()
        {

            $appl_no = $this->input->get('appl_no');

            $editData['data1']      =   $this->Applications->f_get_application_editData($appl_no);
            $editData['data2']      =   $this->Applications->f_get_training_editData($appl_no);
            $editData['appl_no']    =   $appl_no;

            $editData['country'] = $this->Applications->f_get_country();

            $this->load->view('application/formEdit2', $editData);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);

            
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $appl_no        =       $_POST['appl_no'];
                
                //Applicant Details
                $apl_name       =       $_POST['apl_name'];

                $apl_mname      =       $_POST['apl_mid_name'];

                $apl_lname      =       $_POST['apl_lst_name'];

                if(!empty($_FILES["apl_name_path"]["name"])&& $_FILES['apl_name_path']['size'] < 3000000)
                {
                    // * config* //
                    $apl_name_data            = 'i'.time().$_FILES["apl_name_path"]["name"];
                    $config1['upload_path']   = FCPATH.'assets/userDocs/appl_photo';
                    $config1['allowed_types'] = 'png|jpg|jpeg';
                    $config1['overwrite']     = TRUE;
                    $config['file_name']      = $apl_name_data;
                    $this->load->library('upload', $config1);
                    // * config* //

                    if(! $this->upload->do_upload("apl_name_path"))
                    {
                        $error = array('error' => 'Error in photo upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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

                if(!empty($_FILES["nric_path"]["name"])&& $_FILES['nric_path']['size'] < 3000000)
                {
                    // * config* //
                    $apl_nric_data            = 'n'.time().$_FILES["nric_path"]["name"];
                    $config2['upload_path']   = FCPATH.'assets/userDocs/appl_photo';
                    $config2['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config2['overwrite']     = TRUE;
                    $config2['file_name']     = $apl_nric_data;
                    $this->load->library('upload', $config2);
                    // * config* //

                    //$apl_nric_data = $_FILES["nric_path"]["name"];

                    if(! $this->upload->do_upload("nric_path"))
                    {
                        $error = array('error' => 'Error in NRIC upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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

                if(!empty($_FILES["pp_no"]["name"])&& $_FILES['pp_no']['size']<2000000)
                {
                    // * config* //
                    $pp_no_data               = 'p'.time().$_FILES["pp_no"]["name"];

                    $config3['upload_path']   = FCPATH.'assets/userDocs/appl_photo';
                    $config3['allowed_types'] = 'png|jpg|jpeg|pdf';
                    //$config3['max_size']      = '2048';
                    $config3['overwrite']     = TRUE;
                    $config3['file_name']     = $pp_no_data;
                    $this->load->library('upload', $config3);
                    // * config* //

                    //$pp_no_data = $_FILES["pp_no"]["name"];

                    if(! $this->upload->do_upload("pp_no"))
                    {
                        
                        $error = array('error' => 'Error in passport upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');

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

                if(!empty($_FILES["kin_nric_path"]["name"])&& $_FILES['kin_nric_path']['size'] < 3000000)
                {
                    // * config* //

                    $kin_nric_data = 'kn'.time().$_FILES["kin_nric_path"]["name"];
                    $config4['upload_path']   = FCPATH.'assets/userDocs/appl_photo';

                    $config4['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config4['overwrite']     = TRUE;
                    $config4['file_name']     = $kin_nric_data;
                    $this->load->library('upload', $config4);
                    // * config* //

                    if(! $this->upload->do_upload("kin_nric_path"))
                    {
                        $error = array('error' => 'Error in kin NRIC upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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

                if(!empty($_FILES["kin_pp"]["name"])&& $_FILES['kin_pp']['size'] < 3000000)
                {
                    // * config* //
                    $kin_pp_data             = 'kp'.time().$_FILES["kin_pp"]["name"];
                    $config5['upload_path']  = FCPATH.'assets/userDocs/appl_photo';
                    if(!is_dir($config5['upload_path'])) 
                    {
                        mkdir($config5['upload_path'],0777,TRUE);
                    }
                    $config5['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config5['overwrite']     = TRUE;
                    $config5['file_name']     = $kin_pp_data;
                    $this->load->library('upload', $config5);
                    // * config* //

                    if(! $this->upload->do_upload("kin_pp"))
                    {
                        $error = array('error' => 'Error in kin passport upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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


                $updateValue    = array('appl_name'     =>  $apl_name,

                                    'appl_mid_name'     =>  $apl_mname,

                                    'appl_last_name'    =>  $apl_lname,

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

                                    'applcnt_kin_reltion' =>    $reln

                                    );

                
                $this->Applications->f_update_applcationDtls($updateValue, $appl_no);

                redirect('Application/edit3?appl_no='.$appl_no);

            }

        }

        // For III Form -- 
        public function edit3()
        {

            $appl_no = $this->input->get('appl_no');

            $editData['data1']      =   $this->Applications->f_get_application_editData($appl_no);
            $editData['data2']      =   $this->Applications->f_get_training_editData($appl_no);
            $editData['appl_no']    =   $appl_no;

            $editData['country'] = $this->Applications->f_get_country();

            $this->load->view('application/formEdit3', $editData);

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];

            $this->load->view('dashboard/footer', $script);
            
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $appl_no       =       $_POST['appl_no'];

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

                if(!empty($_FILES["kin_med_cert"]["name"])&& $_FILES['kin_med_cert']['size'] < 3000000)
                {
                    // * config* //

                    $kin_med_cert_data =   'kin_med_cert'.time().$_FILES["kin_med_cert"]["name"];

                    $config6['upload_path']  = FCPATH.'assets/userDocs/certificate';

                  
                    $config6['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config6['overwrite']     = TRUE;
                    $config6['file_name']     = $kin_med_cert_data;
                    $this->load->library('upload', $config6);
                    // * config* //

                    

                    if(! $this->upload->do_upload("kin_med_cert"))
                    {
                        $error = array('error' => 'Error in kin medical certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_med_cert_path"  => 'assets/userDocs/'.$kin_med_cert_data);
                        $kin_med_cert_path  =   'assets/userDocs/certificate/'.$kin_med_cert_data;
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


                if(!empty($_FILES["kin_huet_cert"]["name"])&& $_FILES['kin_huet_cert']['size'] < 3000000)
                {
                    // * config* //
                    $kin_huet_cert_data       = 'kin_huet_cert'.time().$_FILES["kin_huet_cert"]["name"];
                    $config7['upload_path']   = FCPATH.'assets/userDocs/certificate';
                    $config7['allowed_types'] = 'png|jpg|jpeg|pdf';
                    $config7['overwrite']     = TRUE;
                    $config7['file_name']     =  $kin_huet_cert_data;
                    $this->load->library('upload', $config7);
                    // * config* //

                   
                    if(! $this->upload->do_upload("kin_huet_cert"))
                    {
                        $error = array('error' => 'Error in kin huet certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_huet_cert_path"  => 'assets/userDocs/'.$kin_huet_cert_data);
                        $kin_huet_cert_path  =   'assets/userDocs/certificate/'.$kin_huet_cert_data;
                    }
                }else{

                        $kin_huet_cert_path  =  $_POST['huit_cert_path_prev'];
                }

                $vrf_flg        =   $_POST['trn_vrf_flg'];

                if(!empty($_FILES["trn_vrf_cert_path"]["name"])&& $_FILES['trn_vrf_cert_path']['size'] < 3000000)
                {
                    // * config* //
                    $trn_vrf_cert_data         = 'trn_vrf_cert'.time().$_FILES["trn_vrf_cert_path"]["name"];
                    $config8['upload_path']    = FCPATH.'assets/userDocs/certificate';
                    $config8['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config8['overwrite']      = TRUE;
                    $config8['file_name']      = $trn_vrf_cert_data;
                    $this->load->library('upload', $config8);
                    // * config* //

                    if(! $this->upload->do_upload("trn_vrf_cert_path"))
                    {
                        $error = array('error' => 'Error in Verification certificate upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("kin_huet_cert_path"  => 'assets/userDocs/'.$kin_huet_cert_data);
                        $trn_vrf_path  =   'assets/userDocs/certificate/'.$trn_vrf_cert_data;
                    }
                }else{

                        $trn_vrf_path  =  $_POST['trn_vrf_cert_path_prev'];
                }

                //H2S Details

                $updateValue    = array(
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

                                'trn_vrf_flg'         =>    $vrf_flg,

                                'trn_vrf_cert_path'   =>    $trn_vrf_path,

                                'h2s_inst_name'       =>    $_POST['h2s_inst_name'],

                                'h2s_inst_adr'        =>    $_POST['h2s_inst_adr'],

                                'h2s_course'          =>    $_POST['h2s_course'],

                                'h2s_cert_no'         =>    $_POST['h2s_cert_no'],

                                'remarks'             =>    $_POST['remarks'],

                                'declaration'         =>    $this->input->post('declaration')

                                );

                $this->Applications->f_update_applcationDtls($updateValue, $appl_no);

                redirect('training/add?appl_no='.$appl_no);

            }

        }


        public function delete()
        {

            $appl_no    =       $this->input->get('appl_no');
            $sl_no      =       $this->input->get('sl_no');
            
            $this->Applications->f_delete_applicationDtls($sl_no, $appl_no);
            $this->Applications->f_delete_applicationTraining($sl_no, $appl_no);
            
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
                $config1['allowed_types'] = 'gif|jpg|jpegf';
                $config1['overwrite'] = TRUE;
                $this->load->library('upload', $config1);
                // * config* //

                $oth_item1       =       $_POST['oth_item1'];
                if(!empty($_FILES["oth_sup_doc1"]["name"])&& $_FILES['oth_sup_doc1']['size']<2000000)
                {

                    $apl_name_data1 = $_FILES["oth_sup_doc1"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc1"))
                    {
                        $error = array('error' => 'Error in doc upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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
                if(!empty($_FILES["oth_sup_doc2"]["name"])&& $_FILES['oth_sup_doc2']['size']<2000000)
                {
                    
                    $apl_name_data2 = $_FILES["oth_sup_doc2"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc2"))
                    {
                        $error = array('error' => 'Error in doc2 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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
                if(!empty($_FILES["oth_sup_doc3"]["name"])&& $_FILES['oth_sup_doc3']['size']<2000000)
                {
                    
                    $apl_name_data3 = $_FILES["oth_sup_doc3"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc3"))
                    {
                        $error = array('error' => 'Error in doc3 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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
                if(!empty($_FILES["oth_sup_doc4"]["name"])&& $_FILES['oth_sup_doc4']['size']<2000000)
                {
                    
                    $apl_name_data4 = $_FILES["oth_sup_doc4"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc4"))
                    {
                        $error = array('error' => 'Error in doc4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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
                if(!empty($_FILES["oth_sup_doc5"]["name"])&& $_FILES['oth_sup_doc5']['size']<2000000)
                {
                    
                    $apl_name_data5 = $_FILES["oth_sup_doc5"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc5"))
                    {
                        $error = array('error' => 'Error in doc5 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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
                if(!empty($_FILES["oth_sup_doc6"]["name"])&& $_FILES['oth_sup_doc6']['size']<2000000)
                {
                    
                    $apl_name_data6 = $_FILES["oth_sup_doc6"]["name"];

                    if(! $this->upload->do_upload("oth_sup_doc6"))
                    {
                        $error = array('error' => 'Error in doc6 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
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


        public function getPass_bkup()
        {

            $appl_no = $this->input->get('appl_no');
            
            $passData['data'] = $this->Applications->f_get_application_editData($appl_no);

            $content = '';
            $content1 = '';
            //$content .= '<br>';
            
            foreach($passData['data'] as $key)
            {
                
                $passKey        = $key->appl_no.'/Pass-'.$key->sl_no;
                $logoPath       = base_url('assets/images/pass/logo.png');
                $photoPath      = base_url($key->appl_photo_path);

                $medExpDt       = date('d-F-Y',strtotime($key->med_exp_dt));

                $signaturePath = base_url('assets/images/pass/signature.png');
    
                /////////////////////////////////////////////////////////////////////////////////////////////////////////
                
                if($key->h2s_cert_path != "")
                {
                    $trainingStatus = "Not Attended";
                }
                else
                {
                    $trainingStatus = "Attended";
                }

               
            
            //$pdf->Output('Pass'.$appl_no, 'I');

                $content = '<!doctype html>
                <html>
                <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                
                <title>Untitled Document</title>
                <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet"> 
                </head>
                
                <body>
                    <table style="width: 579px; margin-bottom: 25px;" border="0" cellpadding="0" cellspacing="0" width="579">
                    <tr style="background: #92dad6;" valign="top" align="left">
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                        <td style="border-bottom: #86c2bf solid 5px; padding: 15px 0 0 15px; box-sizing: border-box;" width="300">
                        <div style="width: 100%;"><img src="'.$logoPath.'" width="400" height="63" alt=""/></div>
                        <div style="font-family: PT Sans, sans-serif; font-size: 16px; color: #014c89; padding-left:80px;"><strong>Name: '.$key->appl_name.' '.$key->appl_mid_name.' '.$key->appl_last_name.'</strong></div>
                    </td>
                    <td style="border-bottom: #86c2bf solid 5px;" valign="top" align="left" width="103"><img src="'.$photoPath.'" width="103" height="105" alt="" style="display: block;" />
                        </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                    <tr>
                        <td style="background: #d6efec; padding: 10px 15px; font-family: PT Sans, sans-serif; font-size: 14px; color: #231f20;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                            <tr>
                              <td width="20%" style="padding-bottom: 6px;" valign="top" align="left">Card No</td>
                              <td width="80%" style="padding-bottom: 6px;" valign="top" align="left">: '.$key->appl_no.'</td>
                            </tr>
                            <tr>
                              <td valign="top" align="left" style="padding-bottom: 7px;">IC/Passport</td>
                              <td valign="top" align="left" style="padding-bottom: 7px;">:'.$key->applcnt_pasprt_no.'</td>
                            </tr>
                            <tr>
                              <td valign="top" align="left" style="padding-bottom: 7px;">Nationality </td>
                              <td valign="top" align="left" style="padding-bottom: 7px;">:'.$key->appl_nation.'</td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" style="padding-bottom: 7px;">NRIC </td>
                                <td valign="top" align="left" style="padding-bottom: 7px;">:'.$key->nric_no.'</td>
                              </tr>
                            <tr>
                              <td valign="top" align="left" style="padding-bottom: 7px;">Company Name </td>
                              <td valign="top" align="left">:'.$key->org_name.'</td>
                            </tr>
                            <tr>
                              <td valign="top" align="left" style="padding-bottom: 7px;">Address </td>
                              <td valign="top" align="left" style="padding-bottom: 7px;">:'.$key->applcnt_add.'</td>
                            </tr>
                            <tr>
                              <td valign="top" align="left" style="padding-bottom: 7px;">Telephone </td>
                              <td valign="top" align="left" style="padding-bottom: 7px;">:'.$key->apl_cnt_mob.'</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                    <tr>
                      <td >
                          <h3>Certification Expiry Date</h3>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td width="33%" align="left" valign="top" style="padding-bottom: 8px;">Boset-Huet: 1-Oct-23</td>
                      <td width="33%">Medical:'.$medExpDt.'</td>
                      <td width="33%">H2S: Attended</td>
                    </tr>
                    <tr>
                      <td>Card Valid Till: 2-Sep-21</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
                
                    </td>
                      </tr>
                        
                    
                    </table>
                    
                    <table style="width: 579px;" border="0" cellpadding="0" cellspacing="0" width="579">
                  <tbody>
                    <tr>
                      <td align="left" valign="top" style="background: #d6efec; padding:20px 15px 10px 15px; font-size: 24px; color: #231f20; font-family: PT Sans, sans-serif;
                                 font-weight: 700;">
                          VESTIGO PETROLEUM SDN BHD (1044120-D)
                        </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" style="background: #d6efec; padding: 0 15px 30px 15px; font-family: PT Sans, sans-serif; font-size: 14px; color: #231f20; line-height: 22px;">
                          
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td align="left" valign="top"><p style="color: #231f20; line-height: 24px; font-size: 14px; padding: 0; margin: 0;">This Offshore Safty Card is not transferable.<br>
                        If found please return to:<br>
                        Vestigo petroleum Sdn. Bhd.<br>
                        Level 13, Menara Binjai,<br>
                        No. 2, Jalan Binjai,<br>
                        Off Jalan Ampang,<br>
                      50450 Kuala Lumpur.</p>
                      <p style="padding: 20px 0 0 0; margin: 0; font-size: 18px; color:#231f20; font-weight: 700;">Telephone: 603 27769999 (Office)</p></td>
                      <td align="center" valign="bottom" width="255"><img src="images/signature.png" width="182" height="153" alt=""/>
                        <p style="background:#c6c6c6; padding: 4px 3px;	font-size: 13px; color:	#231f20; font-weight: 600; font-style: italic; line-height: 16px; margin:0;">This is a computer-generated document and no signature is required</p>
                    </td>
                    </tr>
                  </tbody>
                </table>
                    
                        </td>
                    </tr>
                  </tbody>
                </table>
                
                </body>
                </html>';

            }


            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);

            $pdf->SetHeaderData($logoPath, 400, $appl_no.' 033','');


            $pdf->SetTitle($appl_no);
            $pdf->SetHeaderMargin(15);
            $pdf->SetTopMargin(5);
            $pdf->SetFont('Times', '', 16);
            $pdf->setFooterMargin(15);
            $pdf->SetAutoPageBreak(true);
            //$pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            
            $pdf->AddPage();
            //$pdf->footertext($html_content);
            $pdf->WriteHTML($content, true, 0, true, 0);
            $pdf->lastPage();
            

            $pdf->Output('Pass', 'I');


        }

        public function getpass(){

            $appl_no = $this->input->get('appl_no');
            
           
            $appl_name    = $this->Applications->f_get_appl_name($appl_no);
           // $name = $appl_name->appl_name.','.$appl_name->h2s_exp_dt;
           $name = $appl_name->appl_name;
           $exp_dt =$appl_name->h2s_exp_dt;
            $code='<center><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$name."%0A".$exp_dt.'" title="Link to Google.com"></center>';

            //die();
            
        $passData['img_url']="";
       
        
        $passData['img_url']=$code;
        

            $passData['dates'] = $this->Applications->f_get_application_valid_card($appl_no);

            $passData['key'] = $this->Applications->f_get_application_pdf($appl_no);

            $mpdf = new \Mpdf\Mpdf();
            $html = $this->load->view('demo',$passData,true);
            $mpdf->WriteHTML($html);
            $mpdf->Output(); // opens in browser
            
        }

       public function testemail(){


        $this->email->from('safepass@esafepass.com', 'Esafepass');
        $this->email->to('admin@esafepass.com');
 
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

         if($this->email->send()) 
        // $this->session->set_flashdata("email_sent","Email sent successfully."); 

            echo "email_sent";

         else 
         //$this->session->set_flashdata("email_sent","Error in sending Email."); 

            echo "email_not_sent";
       }

    }


?>