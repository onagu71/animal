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
                $this->db->where($w->column, $w->value);
            }
        }
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getFishes() {
        return $this->find('critter', array(
            array('column' => 'isFishes','value' => 1)
        ));
    }

    public function getinsect() {
        $this->db->where('isFishes', 1);
        $query = $this->db->get('critter');
        return $query->result();
    }

}