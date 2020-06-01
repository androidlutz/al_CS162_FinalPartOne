<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('employee_model');
        $this->load->helper('url');
    }

    public function view($id = NULL){

        //if employee id isn't null, view only one employee
        if($id != NULL){
            $data['employees'] = $this->employee_model->get_employee($id);

            //view all employees if no ID exists
            $this->load->view('templates/header');
            $this->load->view('employee/employees', $data);
            $this->load->view('templates/footer');
            return;
        }

        //get employee data
        $data['employees'] = $this->employee_model->get_employee(NULL);

        //view all employees if no ID exists
        $this->load->view('templates/header');
        $this->load->view('employee/employees', $data);
        $this->load->view('templates/footer');
        
    }

    public function create(){

    }

    public function update($id = NULL){

    }

    public function delete($id = NULL){

    }
}