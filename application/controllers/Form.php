<!-- <?php

class Form extends CI_Controller {

public function __construct()
{
   parent::__construct();
   $this->load->helper('form');
   $this->load->model('home');
   $this->load->library('form_validation');

}



        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->helper('form');

                $this->load->library('form_validation');

                $this->form_validation->set_rules('first_name', 'Nombre', 'required');
                $this->form_validation->set_rules('last_name', 'Apellidos', 'required');
                $this->form_validation->set_rules('email', 'Correo Electrónico', 'required');
                $this->form_validation->set_rules('textarea', 'Comentario', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('home');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}
 -->
