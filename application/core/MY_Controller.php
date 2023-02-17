<?php 
// class MY_Controller extends CI_Controller{
//     public function __construct(){
//         parent::__construct();
//         $this->load->library('session');
//         //Do your magic here
//     }
// }

// class MY_Admin extends MY_Controller{
    
//     public function __construct(){
//         parent::__construct();
//         $user=$this->session->userdata("login")->confirm_email;
//         if(!empty($user)){
//             if($this->session->userdata("login")->user_type=='S'||$this->session->userdata("login")->user_type=='A'){
//                 if($this->session->userdata('admin_status')=='enable'){
//                     $this->user_id=$this->session->userdata('user_id');
//                     $this->user_name=$this->session->userdata('user_name');
//                     $this->email=$this->session->userdata('email');
//                     $this->dp=$this->session->userdata('dp');
//                     $this->role=$this->session->userdata('role');
//                 }else{
//                     return redirect(base_url('admin/login'));
//                 }
//             }else{
//                 return redirect(base_url('admin/login'));
//             }
//         }else{
//             return redirect(base_url('admin/login'));
//         }
//     }
// }




// class MY_User extends MY_Controller{
    
//     public function  __construct(){
//         parent::__construct();
//         $user=$this->session->userdata("login")->confirm_email;
//         if(!empty($user)){
//             if($this->session->userdata("login")->user_type=='O'){
//                 if($this->session->userdata('admin_status')=='enable'){
//                     $this->user_id=$this->session->userdata('user_id');
//                     $this->user_name=$this->session->userdata('user_name');
//                     $this->email=$this->session->userdata('email');
//                     $this->dp=$this->session->userdata('dp');
//                     $this->role=$this->session->userdata('role');
//                 }else{
//                     return redirect(base_url('admin/login'));
//                 }
//             }else{
//                 return redirect(base_url('admin/login'));
//             }
//         }else{
//             return redirect(base_url('admin/login'));
//         }
//     }
    
// }