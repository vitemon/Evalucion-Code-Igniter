<?php
class Pages extends CI_Controller {
        
        public function view($page = 'home')  {

        $this->load->helper('url_helper'); 
        $this->load->library('form_validation');
        $this->load->helper('form');       

            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
                $data['title'] = ucfirst($page); // Capitalize the first letter
    
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);

            $this->form_validation->set_rules('first_name', 'Nombre', 'required');
            $this->form_validation->set_rules('last_name', 'Apellidos', 'required');
            $this->form_validation->set_rules('email', 'Correo Electrónico', 'required');
            $this->form_validation->set_rules('textarea', 'Comentario', 'required');
            
            if ($this->form_validation->run() == FALSE)
                {
                        $this->load->helper('url_helper'); 
                        $this->load->library('form_validation');
                        $this->load->helper('form');  
                }
                else
                {
                        // $this->load->view('formsuccess');
                }
        
        }
}