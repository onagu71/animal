<?php
class Pages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    private function query($sql, $parameters = []) {
		$query = $this->pdo->prepare($sql);
		$query->execute($parameters);
		return $query;
    }	

    public function find($table, $where = NULL) {
        if(!empty($where)) {
            foreach($where as $w) {
                $this->db->where($w['column'], $w['value']);
            }
        }
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getFishes() {
        $a = array(array('column' => 'isFishes','value' => 1));
        return $this->find('critter', $a);
    }

    public function getinsects() {
        $a = array(array('column' => 'isFishes','value' => 0));
        return $this->find('critter', $a);
    }

}