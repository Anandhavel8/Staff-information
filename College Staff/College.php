<?php

class College extends CI_Controller{

    public function index(){

        $this->load->view('college_staff');

    }
    
    public function student(){

        $this->load->view('college_staff');

    }
    public function savedata(){
       
        extract($_POST);

        $data=[
            'name'=>$name,
            'date_of_joining'=>$date_of_joining,
            'address'=>$address,
            'department'=>$department,
            'phone_number'=>$phone_number,
            'gender'=>$gender,
            'blood_group'=>$blood_group
        ];

       

        $this->load->model('CollegeModel');
        $result=$this->CollegeModel->insertdata($data);

        if($result){

            $this->load->view('college_staff');

        }else{

            echo 'error while inserting data';
        }

    }
}





?>