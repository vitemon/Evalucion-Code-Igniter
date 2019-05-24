<?php
class Pages extends CI_Controller {
        
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Contact_models');
                $this->load->helper('url_helper'); 

        }
        
        public function view($page = 'home')  {

        $this->load->library('form_validation');
        $this->load->helper('form');           
            

            $this->form_validation->set_rules('first_name', 'first_name', 'required');
            $this->form_validation->set_rules('last_name', 'last_name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('textarea', 'textarea', 'required');
        
            if ($this->form_validation->run() === FALSE)
                {
                $this->load->view('templates/header');
                $this->load->view('pages/home');
                $this->load->view('templates/footer');
                }
                else
                {
                        $this->Contact_models->set_contact();
                        $this->load->view('templates/header');
                        $this->load->view('pages/home2');
                        $this->load->view('templates/footer');
                }
        
        }
}