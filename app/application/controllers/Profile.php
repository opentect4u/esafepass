<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('Profiles');

		$this->load->model('Process');


		$link['link']   	=   ["/assets/plugins/dropify/dist/css/dropify.min.css"];

		$link['title']  	= 'Profile Manager';

		$link['userName'] 	=  $_SESSION['user_name'].' '.$_SESSION['user_last_name'];

		$userId 			= $this->session->userdata('login')->user_id;

		$link['userData']	    = $this->Process->userInf($userId);

		$this->load->view('dashboard/header',$link);

	}

	public function viewProfile(){

		if($this->session->userdata('login')){

			$userId = $this->session->userdata('login')->user_id;

			$row['userDtls']    = $this->Profiles->userDtls($userId);

			$script['script']   =   ["/assets/plugins/dropify/dist/css/dropify.min.css"];

            $link['title']  	= 'User Profile';

            $this->load->view('profile/viewProfile',$row);

            $this->load->view('dashboard/footer',$script);


		}

	}

	public function editProfile(){

		if($this->session->userdata('login')){

			if($_SERVER['REQUEST_METHOD']=="POST"){

				$userId 	= $this->session->userdata('login')->user_id;

				//$pwd 		= password_hash($this->input->post('new_pass'),PASSWORD_DEFAULT);

				$fname		= $this->input->post('f_name');

				$lname		= $this->input->post('l_name');

				$mobNo		= $this->input->post('mob_no');				

				$time     	= date('Y-m-d h:m:i',strtotime(date('Y-m-d h:m:i')));

				

				if(!empty($_FILES["imgfile"]["name"]))
                {
                    // * config* //
                    $config['upload_path']  = FCPATH.'assets/images/users';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
                    // * config* //

                    $img_path_data = $_FILES["imgfile"]["name"];

                    if(! $this->upload->do_upload("imgfile"))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $this->upload->data();
                        //$data_array = array("apl_name_path"  => 'assets/userDocs/'.$apl_name_data);
                        $img_path  =   'assets/images/users/'.$img_path_data;


                    }
				}
				
				//var_dump($img_path);die;

                if(empty($img_path)){

                	$img_path = '/assets/images/users/profile.png';
                }else{

                	$img_path  = $img_path;
                }

				$value		= array(

										'user_name'		=>	$fname,

										'user_last_name'=>	$lname,

										'mob_no'		=>	$mobNo,

										'modified_by'	=>	$userId,

										'modified_dt'	=>	$time,	

										'img_path'		=>  $img_path									
								);

				$where 		=	array(

										'user_id'		=>	$userId
								);



				$this->Profiles->edit("md_users", $value, $where);

				$message    =   array( 
                    
						                'message'   => 'Profile Successfully Updated.',
						                
						                'status'    => 'success'
						                
						            );



				$this->session->set_flashdata('msg', $message);

				redirect("profile/viewProfile");	
			}
		}

	}

	public function editPass(){

		if($this->session->userdata('login')){

			if($_SERVER['REQUEST_METHOD']=="POST"){

				$userId 	= $this->session->userdata('login')->user_id;

				$pwd 		= password_hash($this->input->post('new_pass'),PASSWORD_DEFAULT);		

				$time     	= date('Y-m-d h:m:i',strtotime(date('Y-m-d h:m:i')));


				$value		= array(

										'password'		=>	$pwd,

										'confirm_psw'	=>  $pwd,

										'modified_by'	=>	$userId,

										'modified_dt'	=>	$time									
								);

				$where 		=	array(

										'user_id'		=>	$userId
								);



				$this->Profiles->edit("md_users", $value, $where);

				$message    =   array( 
                    
						                'message'   => 'Password Successfully Updated.',
						                
						                'status'    => 'success'
						                
						            );



				$this->session->set_flashdata('msg', $message);

				redirect("profile/viewProfile");	
			}
		}

	}

	/*public function upload() {

        if(isset($_FILES["imgfile"]["name"])){
            
            $config['upload_path']  = FCPATH.'app/assets/images/users/';
        
            $config['allowed_types'] = 'gif|jpg|jpeg|png';

            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);

            if(! $this->upload->do_upload("imgfile")){

                echo $this->upload->display_errors();

            }
            else{


                $this->upload->data();

                $data_array = array(

                    "img_path"  => 'app/assets/images/users/'.$_FILES["imgfile"]["name"]

                );


                $userId = $this->session->userdata('loggedin')->user_id;

                $prevLink = $this->Profiles->userDtls($userId);


                if($prevLink->img_path != 'app/assets/images/users/profile.png'){

                    unlink(FCPATH.$prevLink->img_path);

                }
                    

                $this->Profile->edit("md_users", $data_array, array("user_id" => $this->session->userdata('loggedin')->user_id));

            }

        }
        
        exit;

    }*/

}

?>