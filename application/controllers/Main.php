<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	/************************************************************ 
	 * This Controller is used for Login logout file download   *
	 * and  adding new bank and user maintainence				* 
	 ************************************************************/

	class Main extends CI_Controller
	{

		public function __construct(){
			parent:: __construct();
			$this->load->model('Process');
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));
			$this->load->helper('string');
		}


		public function signaddUser(){


				if($_SERVER['REQUEST_METHOD']=="POST"){
					
					$fName			= $_POST['fname'];

					$lName			= $_POST['lname'];

					$userId 	    = $_POST['email'];

					$mobNo			= $_POST['mno'];

					$email 			= $_POST['email'];

					$pwd  		    = password_hash($_POST['password'],PASSWORD_DEFAULT);

					$cPwd  			= password_hash($_POST['password'],PASSWORD_DEFAULT);

					$userType       ='O';

					$time     	    = date('Y-m-d h:m:i',strtotime(date('Y-m-d h:m:i')));

					$rand_no		= random_string('alnum',5);

					$vText 			= $rand_no;

					$row 	  		= array('user_id'					=>	$userId,
											'confirm_email'				=>	$email,
											'password' 					=>	$pwd,
											'confirm_psw' 				=>	$cPwd,
											'user_type'   				=>	$userType,
											'user_name'					=>	$fName,
											'user_last_name'			=>	$lName,
											'mob_no'					=>  $mobNo,
											'user_status'				=>	'A',
											'created_by'				=>	$userId,
											'created_dt'				=>	$time,
											'email_verification_code'	=>	$rand_no,
										    'img_path'					=>	'/assets/images/users/profile.png');

					$count = $this->Process->chk_email($userId);

					if($count->ecount > 0){

						echo "<script> alert('Supplied Email Id already in use.');
						document.location= '".base_url()."' </script>";

					}else{

							$this->Process->insert_user($row);
							$this->load->library('email');
							$this->email->to($userId);
							$this->email->from('admin@esafepass.com', 'Safepass');
							$this->email->subject("Safepass Email Verification");
							$this->email->message("Dear ".$fName.",\r\nPlease click on below URL or paste into your browser to verify your Email Id\r\n\r\n". site_url("main/verify/").$vText."\r\n"."\r\n\r\nThanks\r\nAdmin Team");
							$this->email->send();




							// $this->send_mail($userId,$vText,$fName);

							echo "<script> alert('Successfully submitted.A verification link has been sent to your email account.');
								document.location= '".base_url()."' </script>";
					}

				}
		}	


		//for sending mail -- 
		// public function send_mail($userId,$verificationText,$name){

				

		// 		/*$config = array();
		// 		$config['protocol']  = 'smtp';
		// 		$config['smtp_host'] = 'mail.esafepass.com';  
		// 		$config['smtp_user'] = 'admin@esafepass.com';
		// 		$config['smtp_port'] = 587;*/
		// 		/*$config['newline']   = "\r\n";
		// 		$config['wordwrap']  = TRUE;
		// 		$config['charset'] 	 = 'iso-8859-1';
		// 		$config['mailtype']  = 'html';*/

		// 		$this->load->library('email');
		// 		$config = Array(
		// 			'protocol' => 'smtp',
		// 			'smtp_host' => 'mail.esafepass.com',
		// 			'smtp_port' => 587,
		// 			'smtp_user' => 'admin@esafepass.com', // change it to yours
		// 			'smtp_pass' => 'eSafe#Pass@2023', // change it to yours
		// 			'mailtype' => 'html',
		// 			'charset' => 'iso-8859-1',
		// 			'wordwrap' => TRUE
		// 		  );
				  

		// 		$this->email->initialize($config);
				
		// 		$mail = $userId;
				
		// 		$this->email->to($mail);

		// 		$this->email->from('admin@esafepass.com', 'Safepass');

		// 		$this->email->subject("Safepass Email Verification");

		// 		$this->email->message("Dear ".$name.",\r\nPlease click on below URL or paste into your browser to verify your Email Id\r\n\r\n". site_url("main/verify/").$verificationText."\r\n"."\r\n\r\nThanks\r\nAdmin Team");

		// 		$this->email->send();

		// }

		//email verification 
		function verify($verificationText=NULL){  

			$noRecords = $this->Process->verifyEmailAddress($verificationText); 
			
			//echo "<pre>";
			
			//var_dump($noRecords);die;

			if ($noRecords > 0){

			$msg 	= "Email Verified Successfully!"; 

			}else{

			$msg 	= "Sorry Unable to Verify Your Email!"; 

			}

			echo "<script> alert('$msg');
			        document.location= '".base_url()."'</script>";


		}

		//Checking if email id already exists
		public function chkEmail(){

			$email = $_GET['email'];

			$count = $this->Process->chk_email($email);

			$mailId = $count->ecount;

			echo $mailId;
		}

		//Log In
		public function index(){


			if($_SERVER['REQUEST_METHOD']=="POST"){

					$userId	=	$_POST['email'];

					$pwd	=	$_POST['password'];

					$data   =	$this->Process->selectPwd($userId);

					$match	=	password_verify($pwd,$data->password);

					if($match){

						$userData	= $this->Process->userInf($userId);

						$this->session->set_userdata('login',$userData);

						$this->session->userdata('login')->user_id;

						$_SESSION['user_type'] 		= $userData->user_type;

						$_SESSION['user_name'] 		= $userData->user_name;

						$_SESSION['user_last_name'] = $userData->user_last_name;

						redirect('Main/login');

					}else{

						redirect('Main/login');
					}

				}else{

					redirect('Main/login');
			}
		}

		/**Login into system according to the type of user */	
		public function login(){

			


			if($this->session->userdata('login')){

				$_SESSION['sys_date']  	= date('Y-m-d');

				$link['link']       	= array("/assets/plugins/css-chart/css-chart.css");

				$link['title']      	= 'Safepass';

				$link['userName'] 		=  $_SESSION['user_name'].' '.$_SESSION['user_last_name']; 
				
				$userId 				= $this->session->userdata('login')->user_id;

				$link['userData']	    = $this->Process->userInf($userId);

				$script['script']   	=   [];

				//$data['appl'] 		    =   [];


				$aprv	 =	 'A';
				$rej	 =	 'R';
				$pend	 =	 'U';
				$hld	 =	 'H';
				$re		 =	 'J';

				if($_SESSION['user_type']=='O')
				{
					$data['tot_balance'] 		=   $this->Process->f_get_dashboardBalance($userId);				

					$data['aprv_balance'] 		=   $this->Process->f_get_dashboardSectionBalance($userId, $aprv);
					$data['rej_balance'] 		=   $this->Process->f_get_dashboardSectionBalance($userId, $rej);
					$data['pend_balance'] 		=   $this->Process->f_get_dashboardSectionBalance($userId, $pend);
					$data['hld_balance'] 		=   $this->Process->f_get_dashboardSectionBalance($userId, $hld);
					$data['re_balance'] 		=   $this->Process->f_get_dashboardSectionBalance($userId, $re);
				}
				elseif($_SESSION['user_type']=='A' || $_SESSION['user_type']=='S')
				{
					$data['tot_balance'] 		=   	$this->Process->f_get_admin_dashboardBalance($userId);				

					$data['aprv_balance'] 		=   	$this->Process->f_get_admin_dashboardSectionBalance($userId, $aprv);
					$data['rej_balance'] 		=   	$this->Process->f_get_admin_dashboardSectionBalance($userId, $rej);
					$data['pend_balance'] 		=   	$this->Process->f_get_admin_dashboardSectionBalance($userId, $pend);
					$data['hld_balance'] 		=   	$this->Process->f_get_admin_dashboardSectionBalance($userId, $hld);
					$data['re_balance'] 		=   	$this->Process->f_get_admin_dashboardSectionBalance($userId, $re);
				}
				

				// print_r($this->session->userdata("login")->confirm_email);
				// print_r($this->session->userdata("login")->user_type);
				// print_r($this->session->userdata("login")->user_name);
				// exit();
				$this->load->view('dashboard/header',$link);

				$this->load->view('dashboard/dashboard',$data);

				$this->load->view('dashboard/footer',$script);

			}else{

				echo "<script>document.location= '".base_url()."' </script>";
			}
		}

		//Checking if email id verified
		public function vrfEmail(){

			$email  = $_GET['email'];

			$result = $this->Process->verify_email($email);

			$vrfml  = $result->vcount;

			echo $vrfml;
		}

		//Checking password
		public function chk_pwd(){

			$userId 	= $_GET['user'];

			$pwd        = $_GET['password'];

			$data   	= $this->Process->selectPwd($userId);

			$match		= password_verify($pwd,$data->password);

			if($match){

				$ret = 1;

			}else{

				$ret = 0;
			}

			echo $ret;
		}

		/**Logout from  system and redirecting to login page */
		public function logout(){

			if($this->session->userdata('login')){

			$this->session->unset_userdata('login');

			redirect(base_url());

			}else{

				redirect(base_url());
			}
		}

	}

?>