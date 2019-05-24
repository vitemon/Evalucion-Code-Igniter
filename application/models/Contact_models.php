<?php
class Contact_models extends CI_Model {
        public function __construct()
                {
                $this->load->database();
                }
        public function get_contact()
                {
                $query = $this->db->get('contact');
                return $query->result_array();
                }
        public function set_contact() {
                 $this->load->helper('url');
                $data = array(
                    'name' => $this->input->post('first_name'),
                    'lastname' => $this->input->post('last_name'),
                    'email' => $this->input->post('email'),
                    'textarea' => $this->input->post('textarea')
                );
                return $this->db->insert('contact', $data);
        }
        
        public function get_Data() {
                $this->load->database();
                $query = $this->db->query("SELECT * FROM contact");
                $query->result_array();
                return $query->result();
        }
}
