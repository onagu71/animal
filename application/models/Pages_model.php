<?php
class Pages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();
    }

    public function getFishes() {
        $query = $this->db->get('fishes');
        return $query->result();
    }

}