<?php
class City_models extends CI_Model {

    public function __construct() {
		parent::__construct();
	}

	public function get_city() {
		$query = $this->db->get('contact');
		return $query->result_array();
	}

	public function set_city() {
		$this->load->helper('url');
		$data = array (
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state')
			
		);
		
	}
	
	public function get_Data() {
		$this->load->database();
		$query = $this->db->query("SELECT * FROM contact");
		$query->result_array();
		return $query->result();
	}
}
