<?php
class Pages2 extends CI_Controller {
        public function view($page = 'home2')
        {
                $this->load->helper('url_helper');
                $this->load->model('Contact_models');
                $data['userArray'] = $this->Contact_models->get_Data();      

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
        show_404();
        }
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidenav', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/datatable', $data);
            $this->load->view('templates/footer2', $data);
        }

        public function table()
        {
                $this->load->helper('url_helper');
                $this->load->model('Contact_models');
                $data['userArray'] = $this->Contact_models->get_Data();      

       
       
                $this->load->view('templates/datatable', $data);
            
        }
}