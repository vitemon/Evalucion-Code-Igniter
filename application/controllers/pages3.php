<?php
class Pages3 extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url_helper');
    }
    
    public function view($page = 'home3')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
        show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/weather', $data);
        $this->load->view('templates/footer2', $data);
    }
}