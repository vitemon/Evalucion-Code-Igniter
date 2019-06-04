<?php
class Pages3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function set_contact()
    {
        $this->load->helper('url');
    }

    public function view($page = 'home3')
    {
        $data = array(
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state')
        );

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that! 
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page);
        $this->load->view('templates/form_weather');
        if ($this->input->post('submit') != NULL) {
            $this->load->view('templates/weather', $data);
        }
        $this->load->view('templates/footer2');
    }
}
