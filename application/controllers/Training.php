<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Training extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

            $this->load->model('Trainings');
            $this->load->model('Applications');

            $this->load->model('Process');
            $this->load->library('upload');

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

            if($this->session->userdata("login")->user_type!='O'){
                return redirect(base_url()."index.php/main/login");
            }
        }


        // For other training form -- 
        public function add()
        {

            $data['appl_no'] = $this->input->get('appl_no');
            //$data['sl_no'] = $this->input->get('sl_no');        

            $checkEntry = $this->Trainings->f_check_previous_trainingEntry($data['appl_no']);
            $prevEntry_rows = $checkEntry->num_row;

            $script['script'] = [

                "/assets/plugins/moment/moment.js",

                "/assets/plugins/daterangepicker/daterangepicker.js",

                "/js/moduleValidations.js"

            ];
            
            if($prevEntry_rows == 1)
            {
                $editData['data1']  =   $this->Applications->f_get_application_editData($this->input->get('appl_no'));

                $editData['appl_no'] = $this->input->get('appl_no');
                $editData['sl_no'] = $this->input->get('sl_no');
                $editData['data'] = $this->Trainings->f_get_previous_entryDtls($data['appl_no']);

                $this->load->view('application/trainingEdit', $editData);
                $this->load->view('dashboard/footer', $script);

            }
            else
            {
                $data['data1']  =   $this->Applications->f_get_application_editData($this->input->get('appl_no'));

                $this->load->view('application/training', $data);
                $this->load->view('dashboard/footer', $script);

            }

        }

        // For other training entry -- 
        public function newtrainings()
        {

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $appl_no            =       $_POST['appl_no'];

                $inst_name1         =       $_POST['inst_name1'];
                $adr1               =       $_POST['adr1'];
                $course1            =       $_POST['course1'];
                $cert_no1           =       $_POST['cert_no1'];
                $from_dt1           =       $_POST['from_dt1'];
                $to_dt1             =       $_POST['to_dt1'];
                $validity1          =       $_POST['validity1'];

                $inst_name2         =       $_POST['inst_name2'];
                $adr2               =       $_POST['adr2'];
                $course2            =       $_POST['course2'];
                $cert_no2           =       $_POST['cert_no2'];
                $from_dt2           =       $_POST['from_dt2'];
                $to_dt2             =       $_POST['to_dt2'];
                $validity2          =       $_POST['validity2'];

                $inst_name3         =       $_POST['inst_name3'];
                $adr3               =       $_POST['adr3'];
                $course3            =       $_POST['course3'];
                $cert_no3           =       $_POST['cert_no3'];
                $from_dt3           =       $_POST['from_dt3'];
                $to_dt3             =       $_POST['to_dt3'];
                $validity3          =       $_POST['validity3'];

                $inst_name4         =       $_POST['inst_name4'];
                $adr4               =       $_POST['adr4'];
                $course4            =       $_POST['course4'];
                $cert_no4           =       $_POST['cert_no4'];
                $from_dt4           =       $_POST['from_dt4'];
                $to_dt4             =       $_POST['to_dt4'];
                $validity4          =       $_POST['validity4'];

                $inst_name5         =       $_POST['inst_name5'];
                $adr5               =       $_POST['adr5'];
                $course5            =       $_POST['course5'];
                $cert_no5           =       $_POST['cert_no5'];
                $from_dt5           =       $_POST['from_dt5'];
                $to_dt5             =       $_POST['to_dt5'];
                $validity5          =       $_POST['validity5'];


                // * config* //

             
                $certificate_data1         = str_replace(array(':','/','-','*',' '),'_','certi1'.time().$_FILES["certificate1"]["name"]);
                $config1['upload_path']    = FCPATH.'assets/userDocs/training';
                $config1['allowed_types']  = 'png|jpg|jpeg|pdf';
                $config1['overwrite']      = TRUE;
                $config1['file_name']      = $certificate_data1;
                
                $this->upload->initialize($config1); 
                // * config* //
                $certificate1_path = '';
                if(!empty($_FILES["certificate1"]["name"])&& $_FILES['certificate1']['size']< 3000000)
                {
                    

                    if(! $this->upload->do_upload("certificate1"))
                    {
                        $error = array('error' => 'Error in tranning certificate 1 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate1_path  =   'assets/userDocs/training/'.$certificate_data1;
                    }
                }else{

                    $certificate1_path  = '';
                }

                $certificate2_path = '';
             
                $certificate_data2        = str_replace(array(':','/','-','*',' '),'_','certi2'.time().$_FILES["certificate2"]["name"]);
                $config2['upload_path']    = FCPATH.'assets/userDocs/training';
                $config2['allowed_types']  = 'png|jpg|jpeg|pdf';
                $config2['overwrite']      = TRUE;
                $config2['file_name']      = $certificate_data2;
                 $this->upload->initialize($config2);

                if(!empty($_FILES["certificate2"]["name"])&& $_FILES['certificate2']['size'] < 3000000)
                {
                   

                    if(! $this->upload->do_upload("certificate2"))
                    {
                        $error = array('error' => 'Error in tranning certificate 2 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate2_path  =   'assets/userDocs/training/'.$certificate_data2;
                    }
                }else{

                    $certificate2_path  = '';
                }

                $certificate3_path = '';
            
                $certificate_data3         = str_replace(array(':','/','-','*',' '),'_','certi3'.time().$_FILES["certificate3"]["name"]);
                $config3['upload_path']    = FCPATH.'assets/userDocs/training';
                $config3['allowed_types']  = 'png|jpg|jpeg|pdf';
                $config3['overwrite']      = TRUE;
                $config3['file_name']      = $certificate_data3;
                $this->upload->initialize($config3);

                if(!empty($_FILES["certificate3"]["name"])&& $_FILES['certificate3']['size'] < 3000000)
                {
                    

                    if(! $this->upload->do_upload("certificate3"))
                    {
                        $error = array('error' => 'Error in tranning certificate 3 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate3_path  =   'assets/userDocs/training/'.$certificate_data3;
                    }
                }else{
                    $certificate3_path  = '';

                }

                $certificate4_path         = '';
           
                $certificate_data4         = str_replace(array(':','/','-','*',' '),'_','certi4'.time().$_FILES["certificate4"]["name"]);
                $config4['upload_path']    = FCPATH.'assets/userDocs/training';
                $config4['allowed_types']  = 'png|jpg|jpeg|pdf';
                $config4['overwrite']      = TRUE;
                $config4['file_name']      = $certificate_data4;
                 $this->upload->initialize($config4);

                if(!empty($_FILES["certificate4"]["name"])&& $_FILES['certificate4']['size'] < 3000000)
                {
                 

                    if(! $this->upload->do_upload("certificate4"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate4_path  =   'assets/userDocs/training/'.$certificate_data4;
                    }
                }else{

                    $certificate4_path  = '';
                }

                $certificate5_path = '';
          
                $certificate_data5         = str_replace(array(':','/','-','*',' '),'_','certi5'.time().$_FILES["certificate5"]["name"]);
                $config5['upload_path']    = FCPATH.'assets/userDocs/training';
                $config5['allowed_types']  = 'png|jpg|jpeg|pdf';
                $config5['overwrite']      = TRUE;
                $config5['file_name']      = $certificate_data5;
                 $this->upload->initialize($config5);

                if(!empty($_FILES["certificate5"]["name"])&& $_FILES['certificate5']['size'] < 3000000)
                {
                  

                    if(! $this->upload->do_upload("certificate5"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate5_path  =   'assets/userDocs/training/'.$certificate_data5;
                    }
                }else{

                    $certificate5_path  = '';
                }

                $insertValue = array('appl_no' => $appl_no,

                                    'inst_name1' => $inst_name1,
                                    'adr1' => $adr1,
                                    'course1' => $course1,
                                    'cert_no1' => $cert_no1,
                                    'from_dt1' => $from_dt1,
                                    'to_dt1' => $to_dt1,
                                    'validity1' => $validity1,
                                    'certificate1_path' => $certificate1_path,
                                
                                    'inst_name2' => $inst_name2,
                                    'adr2' => $adr2,
                                    'course2' => $course2,
                                    'cert_no2' => $cert_no2,
                                    'from_dt2' => $from_dt2,
                                    'to_dt2' => $to_dt2,
                                    'validity2' => $validity2,
                                    'certificate2_path' => $certificate2_path,

                                    'inst_name3' => $inst_name3,
                                    'adr3' => $adr3,
                                    'course3' => $course3,
                                    'cert_no3' => $cert_no3,
                                    'from_dt3' => $from_dt3,
                                    'to_dt3' => $to_dt3,
                                    'validity3' => $validity3,
                                    'certificate3_path' => $certificate3_path,

                                    'inst_name4' => $inst_name4,
                                    'adr4' => $adr4,
                                    'course4' => $course4,
                                    'cert_no4' => $cert_no4,
                                    'from_dt4' => $from_dt4,
                                    'to_dt4' => $to_dt4,
                                    'validity4' => $validity4,
                                    'certificate4_path' => $certificate4_path,

                                    'inst_name5' => $inst_name5,
                                    'adr5' => $adr5,
                                    'course5' => $course5,
                                    'cert_no5' => $cert_no5,
                                    'from_dt5' => $from_dt5,
                                    'to_dt5' => $to_dt5,
                                    'validity5' => $validity5,
                                    'certificate5_path' => $certificate5_path);


                $this->Trainings->f_insert_trainingDtls($insertValue);

                redirect('Application/apln');
                    
            }


        }

        // For next time entry or edit entry -- 
        public function updateTrainings()
        {

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {

                $appl_no            =       $_POST['appl_no'];

                $inst_name1         =       $_POST['inst_name1'];
                $adr1               =       $_POST['adr1'];
                $course1            =       $_POST['course1'];
                $cert_no1           =       $_POST['certificat1_path'];
                $from_dt1           =       $_POST['from_dt1'];
                $to_dt1             =       $_POST['to_dt1'];
                $validity1          =       $_POST['validity1'];

                $inst_name2         =       $_POST['inst_name2'];
                $adr2               =       $_POST['adr2'];
                $course2            =       $_POST['course2'];
                $cert_no2           =       $_POST['certificat2_path'];
                $from_dt2           =       $_POST['from_dt2'];
                $to_dt2             =       $_POST['to_dt2'];
                $validity2          =       $_POST['validity2'];

                $inst_name3         =       $_POST['inst_name3'];
                $adr3               =       $_POST['adr3'];
                $course3            =       $_POST['course3'];
                $cert_no3           =       $_POST['certificat3_path'];
                $from_dt3           =       $_POST['from_dt3'];
                $to_dt3             =       $_POST['to_dt3'];
                $validity3          =       $_POST['validity3'];

                $inst_name4         =       $_POST['inst_name4'];
                $adr4               =       $_POST['adr4'];
                $course4            =       $_POST['course4'];
                $cert_no4           =       $_POST['certificat4_path'];
                $from_dt4           =       $_POST['from_dt4'];
                $to_dt4             =       $_POST['to_dt4'];
                $validity4          =       $_POST['validity4'];

                $inst_name5         =       $_POST['inst_name5'];
                $adr5               =       $_POST['adr5'];
                $course5            =       $_POST['course5'];
                $cert_no5           =       $_POST['certificat5_path'];
                $from_dt5           =       $_POST['from_dt5'];
                $to_dt5             =       $_POST['to_dt5'];
                $validity5          =       $_POST['validity5'];

                // * config* //

                $certificate1_path = '';
                if(!empty($_FILES["certificate1"]["name"])&& $_FILES['certificate1']['size'] < 3000000)
                {
                    $certificate_data1         = 'certi1'.time().$_FILES["certificate1"]["name"];
                    $config1['upload_path']    = FCPATH.'assets/userDocs/training';
                    $config1['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config1['overwrite']      = TRUE;
                    $config1['file_name']      = $certificate_data1;
                
                   $this->upload->initialize($config1); 

                    if(! $this->upload->do_upload("certificate1"))
                    {
                        $error = array('error' => 'Error in tranning certificate 1 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate1_path  =   'assets/userDocs/training/'.$certificate_data1;
                    }
                }
                else
                {
                    $certificate1_path = $cert_no1;
                }

                $certificate2_path = '';
                if(!empty($_FILES["certificate2"]["name"])&& $_FILES['certificate2']['size'] < 3000000)
                {
                    $certificate_data2         = 'certi2'.time().$_FILES["certificate2"]["name"];
                    $config2['upload_path']    = FCPATH.'assets/userDocs/training';
                    $config2['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config2['overwrite']      = TRUE;
                    $config2['file_name']      = $certificate_data2;

                    $this->upload->initialize($config2); 

                    if(! $this->upload->do_upload("certificate2"))
                    {
                        $error = array('error' => 'Error in tranning certificate 2 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate2_path  =   'assets/userDocs/training/'.$certificate_data2;
                    }
                }
                else
                {
                    $certificate2_path = $cert_no2;
                }

                $certificate3_path = '';
                if(!empty($_FILES["certificate3"]["name"])&& $_FILES['certificate3']['size'] < 3000000)
                {
                   
                    $certificate_data3         = 'certi3'.time().$_FILES["certificate3"]["name"];
                    $config3['upload_path']    = FCPATH.'assets/userDocs/training';
                    $config3['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config3['overwrite']      = TRUE;
                    $config3['file_name']      = $certificate_data3;

                    $this->upload->initialize($config3); 

                    if(! $this->upload->do_upload("certificate3"))
                    {
                        $error = array('error' => 'Error in tranning certificate 3 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate3_path  =   'assets/userDocs/training/'.$certificate_data3;
                    }
                }
                else
                {
                    $certificate3_path = $cert_no3;
                }

                $certificate4_path = '';
                if(!empty($_FILES["certificate4"]["name"])&& $_FILES['certificate4']['size'] < 3000000)
                {
                  

                    $certificate_data4         = 'certi4'.time().$_FILES["certificate4"]["name"];
                    $config4['upload_path']    = FCPATH.'assets/userDocs/training';
                    $config4['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config4['overwrite']      = TRUE;
                    $config4['file_name']      = $certificate_data4;

                    $this->upload->initialize($config4);

                    if(! $this->upload->do_upload("certificate4"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate4_path  =   'assets/userDocs/training/'.$certificate_data4;
                    }
                }
                else
                {
                    $certificate4_path = $cert_no4;
                }

                $certificate5_path = '';
                if(!empty($_FILES["certificate5"]["name"])&& $_FILES['certificate5']['size'] < 3000000)
                {
                   

                    $certificate_data5         = 'certi5'.time().$_FILES["certificate5"]["name"];
                    $config5['upload_path']    = FCPATH.'assets/userDocs/training';
                    $config5['allowed_types']  = 'png|jpg|jpeg|pdf';
                    $config5['overwrite']      = TRUE;
                    $config5['file_name']      = $certificate_data5;

                    $this->upload->initialize($config5);

                    if(! $this->upload->do_upload("certificate5"))
                    {
                        $error = array('error' => 'Error in tranning certificate 5 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate5_path  =   'assets/userDocs/training/'.$certificate_data5;
                    }
                }
                else
                {
                    $certificate5_path = $cert_no5;
                }

                $editValue = array(
                                    'inst_name1' => strtoupper($inst_name1),
                                    'adr1' => strtoupper($adr1),
                                    'course1' => strtoupper($course1),
                                    'cert_no1' => strtoupper($cert_no1),
                                    'from_dt1' => $from_dt1,
                                    'to_dt1' => $to_dt1,
                                    'validity1' => $validity1,
                                    'certificate1_path' => $certificate1_path,
                                
                                    'inst_name2' => strtoupper($inst_name2),
                                    'adr2' => strtoupper($adr2),
                                    'course2' => strtoupper($course2),
                                    'cert_no2' => strtoupper($cert_no2),
                                    'from_dt2' => $from_dt2,
                                    'to_dt2' => $to_dt2,
                                    'validity2' => $validity2,
                                    'certificate2_path' => $certificate2_path,

                                    'inst_name3' => strtoupper($inst_name3),
                                    'adr3' => strtoupper($adr3),
                                    'course3' => strtoupper($course3),
                                    'cert_no3' => strtoupper($cert_no3),
                                    'from_dt3' => $from_dt3,
                                    'to_dt3' => $to_dt3,
                                    'validity3' => $validity3,
                                    'certificate3_path' => $certificate3_path,

                                    'inst_name4' => strtoupper($inst_name4),
                                    'adr4' => strtoupper($adr4),
                                    'course4' => strtoupper($course4),
                                    'cert_no4' => strtoupper($cert_no4),
                                    'from_dt4' => $from_dt4,
                                    'to_dt4' => $to_dt4,
                                    'validity4' => $validity4,
                                    'certificate4_path' => $certificate4_path,

                                    'inst_name5' => strtoupper($inst_name5),
                                    'adr5' => strtoupper($adr5),
                                    'course5' => strtoupper($course5),
                                    'cert_no5' => strtoupper($cert_no5),
                                    'from_dt5' => $from_dt5,
                                    'to_dt5' => $to_dt5,
                                    'validity5' => $validity5,
                                    'certificate5_path' => $certificate5_path );


                $this->Trainings->f_update_trainingDtls($appl_no, $editValue);

                redirect('Application/apln');

            }

        }



    }
