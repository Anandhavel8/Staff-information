<?php

class CollegeModel extends CI_Model{

    public function insertdata($data){

        $this->load->database();
        return $this->db->insert('college_staff',$data);
        
    }
}

?>