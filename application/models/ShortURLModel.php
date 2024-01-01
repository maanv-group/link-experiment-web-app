<?php

class ShortURLModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public $table = 'app_links_data';

	public function shorten($data)
	{
		if ($data['segment'] == "") {
			$string = random_string('alnum', 16);
		} else {
			$string = $data['segment'];
		}
		return $string;
	}

	public function insert($data) : bool{
		if($this->db->insert($this->table, $data)){
			return true;
		} else {
			return false;
		}
	}

	public function get($where = []){
		if(count($where) > 0){
			$this->db->where($where);
		} 
		return $this->db->get($this->table)->result_array();
	}
}
