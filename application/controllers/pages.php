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
        $this->load->model('Contact_models');
   
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
                        $data['userArray'] = $this->Contact_models->get_Data();      
                        $this->load->view('templates/header');
                        $this->load->view('templates/sidenav');
                        $this->load->view('pages/home2');
                        $this->load->view('templates/datatable', $data);
                        $this->load->view('templates/footer2');
                }
        
        }
}