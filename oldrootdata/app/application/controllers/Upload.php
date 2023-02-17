<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('Process');
        }


        public function do_upload()
        {
                $config['upload_path']          = './files/';
                $config['allowed_types']        = 'txt';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        
                            $this->load->view('dashboard/menu');
                            $this->load->view('inward/upload_form', $error);
                         
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('dashboard/menu'); 
                    $this->load->view('inward/upload_ack', $data);
                    
                }
        }
}
?>