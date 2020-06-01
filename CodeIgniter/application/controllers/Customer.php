<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

        public function __construct(){
                parent::__construct();
                //$this->load->model('customer_model');
                $this->load->helper('url');
        }

        public function index($page = 'customers')
        {
                if ( ! file_exists(APPPATH.'views/customer/customers.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('customer/customers', $data);
                $this->load->view('templates/footer', $data);
              

        }

        
}