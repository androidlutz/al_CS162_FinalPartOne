<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
        public function __construct(){
                parent::__construct();
                //$this->load->model('Booking_model');
                $this->load->helper('url');
        }
        public function index($page = 'booking')
        {
                if ( ! file_exists(APPPATH.'views/booking/booking.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('booking/booking', $data);
                $this->load->view('templates/footer', $data);
               

        }
        
}