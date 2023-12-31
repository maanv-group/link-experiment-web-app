<?php

class ShortURLModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

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
		if($this->db->insert('app_links_data', $data)){
			return true;
		} else {
			return false;
		}
	}
}
