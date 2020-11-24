<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Training extends CI_Controller
    {

        public function __construct(){

            parent:: __construct();

            $this->load->model('Trainings');

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

                $editData['appl_no'] = $this->input->get('appl_no');
                $editData['sl_no'] = $this->input->get('sl_no');
                $editData['data'] = $this->Trainings->f_get_previous_entryDtls($data['appl_no']);

                $this->load->view('application/trainingEdit', $editData);
                $this->load->view('dashboard/footer', $script);

            }
            else
            {

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
                $config['upload_path']   = FCPATH.'assets/userDocs/training';
                $config['allowed_types'] = 'png|jpg|jpeg|pdf';
                $config['overwrite']     = TRUE;
                $this->load->library('upload', $config);
                // * config* //
                $certificate1_path = '';
                if(!empty($_FILES["certificate1"]["name"])&& $_FILES['certificate1']['size']< 3000000)
                {
                    $certificate_data = $_FILES["certificate1"]["name"];

                    if(! $this->upload->do_upload("certificate1"))
                    {
                        $error = array('error' => 'Error in tranning certificate 1 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate1_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }else{

                    $certificate1_path  = '';
                }

                $certificate2_path = '';
                if(!empty($_FILES["certificate2"]["name"])&& $_FILES['certificate2']['size'] < 3000000)
                {
                    $certificate_data = $_FILES["certificate2"]["name"];

                    if(! $this->upload->do_upload("certificate2"))
                    {
                        $error = array('error' => 'Error in tranning certificate 2 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate2_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }else{

                    $certificate2_path  = '';
                }

                $certificate3_path = '';
                if(!empty($_FILES["certificate3"]["name"])&& $_FILES['certificate3']['size'] < 3000000)
                {
                    $certificate_data = $_FILES["certificate3"]["name"];

                    if(! $this->upload->do_upload("certificate3"))
                    {
                        $error = array('error' => 'Error in tranning certificate 3 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate3_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }else{
                    $certificate3_path  = '';

                }

                $certificate4_path = '';
                if(!empty($_FILES["certificate4"]["name"])&& $_FILES['certificate4']['size'] < 3000000)
                {
                    $certificate_data = $_FILES["certificate4"]["name"];

                    if(! $this->upload->do_upload("certificate4"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate4_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }else{

                    $certificate4_path  = '';
                }

                $certificate5_path = '';
                if(!empty($_FILES["certificate5"]["name"])&& $_FILES['certificate5']['size'] < 3000000)
                {
                    $certificate_data = $_FILES["certificate5"]["name"];

                    if(! $this->upload->do_upload("certificate5"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate5_path  =   'assets/userDocs/training/'.$certificate_data;
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
                                    'certificate5_path' => $certificate5_path );


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

                //$certificate1_path  =   $_POST['certificate1'];
                // $certificate2_path  =   $_POST['certificate2'];
                // $certificate3_path  =   $_POST['certificate3'];
                // $certificate4_path  =   $_POST['certificate4'];
                // $certificate5_path  =   $_POST['certificate5'];

                // * config* //
                $config['upload_path']  = FCPATH.'assets/userDocs/training';
                $config['allowed_types'] = 'gif|jpg|jpeg';
                $config['overwrite'] = TRUE;
                $this->load->library('upload', $config);
                // * config* //

                $certificate1_path = '';
                if(!empty($_FILES["certificate1"]["name"])&& $_FILES['certificate1']['size']<2000000)
                {
                    $certificate_data = $_FILES["certificate1"]["name"];

                    if(! $this->upload->do_upload("certificate1"))
                    {
                        $error = array('error' => 'Error in tranning certificate 1 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate1_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }
                else
                {
                    $certificate1_path = $cert_no1;
                }

                $certificate2_path = '';
                if(!empty($_FILES["certificate2"]["name"])&& $_FILES['certificate2']['size']<2000000)
                {
                    $certificate_data = $_FILES["certificate2"]["name"];

                    if(! $this->upload->do_upload("certificate2"))
                    {
                        $error = array('error' => 'Error in tranning certificate 2 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate2_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }
                else
                {
                    $certificate2_path = $cert_no2;
                }

                $certificate3_path = '';
                if(!empty($_FILES["certificate3"]["name"])&& $_FILES['certificate3']['size']<2000000)
                {
                    $certificate_data = $_FILES["certificate3"]["name"];

                    if(! $this->upload->do_upload("certificate3"))
                    {
                        $error = array('error' => 'Error in tranning certificate 3 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate3_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }
                else
                {
                    $certificate3_path = $cert_no3;
                }

                $certificate4_path = '';
                if(!empty($_FILES["certificate4"]["name"])&& $_FILES['certificate4']['size']<2000000)
                {
                    $certificate_data = $_FILES["certificate4"]["name"];

                    if(! $this->upload->do_upload("certificate4"))
                    {
                        $error = array('error' => 'Error in tranning certificate 4 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate4_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }
                else
                {
                    $certificate4_path = $cert_no4;
                }

                $certificate5_path = '';
                if(!empty($_FILES["certificate5"]["name"])&& $_FILES['certificate4']['size']<2000000)
                {
                    $certificate_data = $_FILES["certificate5"]["name"];

                    if(! $this->upload->do_upload("certificate5"))
                    {
                        $error = array('error' => 'Error in tranning certificate 5 upload '.$this->upload->display_errors());

                        $this->session->set_flashdata('error',$error['error']);

                        redirect('Application/apln');
                    }
                    else
                    {
                        $this->upload->data();
                        $certificate5_path  =   'assets/userDocs/training/'.$certificate_data;
                    }
                }
                else
                {
                    $certificate5_path = $cert_no5;
                }

                $editValue = array(
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
                                    'certificate5_path' => $certificate5_path );


                $this->Trainings->f_update_trainingDtls($appl_no, $editValue);

                redirect('Application/apln');

            }

        }



    }

?>