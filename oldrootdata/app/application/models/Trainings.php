<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

    class Trainings extends CI_Model
    {

        public function f_check_previous_trainingEntry($appl_no)
        {

            $sql = $this->db->query(" SELECT COUNT(*) AS num_row FROM td_application_training WHERE appl_no = '$appl_no' ");
            return $sql->row();

        }
        

        public function f_get_previous_entryDtls($appl_no)
        {

            $sql = $this->db->query(" SELECT * FROM td_application_training WHERE appl_no = '$appl_no' ");
            return $sql->result();

        }
        
        public function f_insert_trainingDtls($insertValue)
        {

            $this->db->insert('td_application_training', $insertValue);

        }

        public function f_update_trainingDtls($appl_no, $editValue)
        {

            $this->db->where('appl_no', $appl_no);
            $this->db->update('td_application_training', $editValue);

        }

        












    }

?>