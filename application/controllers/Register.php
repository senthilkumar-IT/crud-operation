<?php

class Register extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }
    public function update() {
        extract($_POST);
        $id=$empid;
        $data=[
            'employee_name'=>$empname,
            'employee_email'=>$empemail,
            'employee_mobile'=>$empmobile
                
            
        ];
          $this->load->model('Regmodel');
          $this->Regmodel->updateData($data,$id);
          if($result){
              $this->fetchdata();
          }
        
    }
    public function edit($id) { 
        $this->load->model('Regmodel');
        $result['data']=$this->Regmodel->editData($id);
        $this->load->view('display-records',$result);
    }


    public function employee() {
        $mes['msg']='Your Registration Form';
        
        $this->load->view('registration_form',$mes);
    }


    public function saveData() {
 

  extract($_POST);
        $data = [
            'employee_name' => $empname,
            'employee_email' => $empmail,
            'employee_mobile' => $empmobile
        ];
          $this->load->model('Regmodel');
         $result=$this->Regmodel->insertData($data);
         if($result){
             $res['status']= 'successfully inserted';
             $res['quenty']=100;
             //redirect(base_url().'register/employee');
             $this->load->view('registration_form',$res);
         }
         else{
             echo 'error while inseting data';
              $this->load->view('registration_form',$res);
         }
    }
    
    
        
   /* public function fetchdata(){
        $this->load->model('Regmodel');
        $result['table']=$this->Regmodel->getRecord();
        #print_r($result);
        $this->load->vie
    * }
    */
    public function fetchdata() {
        $this->load->model('Regmodel');
        $result['table']=$this->Regmodel->getRecord();
        $this->load->view('display-records',$result);
        
        
        
    }

}