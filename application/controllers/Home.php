<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    // public function __construct(){
    //     // $this->load->library('form_validation');
    //     $this->load->helper(array('form', 'url'));
    //     $this->load->helper('string');
    // }

    public function index(){
        // echo"dfvg";
        $this->load->view("home_page/home");
    }
}

?>