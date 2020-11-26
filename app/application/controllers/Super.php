<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Super extends CI_controller{

		public function __construct(){

			parent::__construct();

			$this->load->model('Supers');

			$this->load->model('Process');

        	$link['title']  = 'User Maintenance';

        	$link['link']   =   [

            	"/assets/plugins/footable/css/footable.core.css",

            	"/assets/plugins/bootstrap-select/bootstrap-select.min.css"

        	];

        	$link['userName'] 	=  $_SESSION['user_name'].' '.$_SESSION['user_last_name'];

        	$userId 			= $this->session->userdata('login')->user_id;

        	$link['userData']	= $this->Process->userInf($userId);

        	$this->load->view('dashboard/header',$link);

		}

		public function users()
		{

	        $script['script'] = [
	            
	            '/assets/plugins/footable/js/footable.all.min.js',

	            '/assets/plugins/bootstrap-select/bootstrap-select.min.js',

	            'js/footable-init.js',

	            '/assets/plugins/datatables/jquery.dataTables.min.js'
	        
	        ];
       
			if($_SESSION['user_type']=='S')
			{
				$user['user_dtls']    =   $this->Supers->genUserList();
			}
			elseif($_SESSION['user_type']=='A')
			{
				$user['user_dtls']    =   $this->Supers->genUserList_admin();
			}

        	$this->load->view("super/users", $user);

        	$this->load->view('dashboard/footer', $script);

    	}

    	public function editUser(){

    		if ($_SERVER['REQUEST_METHOD']=='POST'){

    			$user_id 			= 	$_POST['uid'];		

    			$status				=   $_POST['status'];

    			$data 				=   array(
    											'verify_stat' => $status
    									);

    			$where              =   array(
    											'user_id' => $user_id
    									);

    			$this->Supers->edit('md_users', $data, $where);

    			$message    		=   array( 
                    
						                	'message'   => 'Successfully Updated.',
						                
						                	'status'    => 'success'
						                
						            	);

    			$this->session->set_flashdata('msg', $message);

				redirect("super/users");

			}	

    	    else{		

	    		$user_id			=	$this->input->get('user_id');


	    		$user['userDtls']	=	$this->Supers->genUserDtls($user_id);


	    		$this->load->view('super/userEdit',$user);

	    		$script['script'] 	= [

	                "/assets/plugins/moment/moment.js",

	                "/assets/plugins/daterangepicker/daterangepicker.js",

	                "/js/moduleValidations.js"

	            ];

	            $this->load->view('dashboard/footer', $script);
	        }
    	}

    	public function addUser(){

    		if ($_SERVER['REQUEST_METHOD']=='POST'){

    			$fname				=	$_POST['fname'];

    			$lname 				=	$_POST['lname'];

    			$user_id 			= 	$_POST['uid'];	

    			$cnct 				=	$_POST['mno'];	

    			$pwd 				=	'$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y';

    			$createdBy 			=	$this->session->userdata('login')->user_id;

    			$createdDt 			=   date('Y-m-d h:m:i');

    			$img 				=	'/assets/images/users/profile.png';

    			$data 				=   array(
    											'user_id'				=>	$user_id,

    											'confirm_email'			=>	$user_id,

    											'password'				=>  $pwd,

    											'confirm_psw'			=>  $pwd,

    											'user_type'				=>  'A',

    											'user_name'				=>	$fname,

    											'user_last_name'		=>	$lname,

    											'mob_no'				=>	$cnct,

    											'user_status'			=>	'A',

    											'verify_stat' 			=>  'A',

    											'created_by'			=>	$createdBy,

    											'created_dt'			=>	$createdDt,

    											'img_path'				=>	$img
    									);

    			$this->Supers->insert('md_users', $data);

    			$message    		=   array( 
                    
						                	'message'   => 'Successfully Saved.',
						                
						                	'status'    => 'success'
						                
						            	);

    			$this->session->set_flashdata('msg', $message);

				redirect("main/login");

			}	

    	    else{		

	    		$this->load->view('super/userAdd');

	    		$script['script'] 	= [

	                "/assets/plugins/moment/moment.js",

	                "/assets/plugins/daterangepicker/daterangepicker.js",

	                "/js/moduleValidations.js"

	            ];

	            $this->load->view('dashboard/footer', $script);
	        }
		}
		
		// For reseting password of user --
		public function resetUser()
		{

			$userId = $this->input->get('user_id');
			$rand = rand(100,10000);
			$newpass = password_hash($rand,PASSWORD_DEFAULT);
			
			// updating user table with new pass 
			$this->Supers->f_update_userPass($userId, $newpass);

			$userName = $this->Supers->f_get_userName($userId);
			$name = $userName->user_name;
			
			//$this->send_mail($userId, $rand, $name)
			
			// Sending mail --
			$this->load->library('email');

			$mail = $userId;
			
			$this->email->to($mail);

			$this->email->from('admin@esafepass.com', 'Safepass');
			//$this->email->from('sbdbhowmik@gmail.com', 'Safepass');

			$this->email->subject("Reset Password");

			$this->email->message("Dear ".$name.",\r\nYour request to reset password has been successfully done.New password is: \r\n\r\n".$rand."\r\n"."\r\n\r\nThanks\r\nAdmin Team");

			if($this->email->send())
			{
				echo "<script> alert('Your password has been successfully regenerated.Please login to your registered email account.');
				document.location= 'users' </script>";
				//redirect('super/users');
			}
			

		}


		//for sending mail -- 
		public function send_mail($userId,$newpass,$name)
		{

			$this->load->library('email');

			$mail = $userId;
			
			$this->email->to($mail);

			$this->email->from('admin@esafepass.com', 'Safepass');

			$this->email->subject("Safepass Email Verification");

			$this->email->message("Dear ".$name.",\r\nYour password has been reset. New password is: \r\n\r\n".$newpass."\r\n"."\r\n\r\nThanks\r\nAdmin Team");

			$this->email->send();

		}



	}
?>