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
		$domain = trim($data['domain'], '/');
		$string = $domain . '/' . $string;
		return $string;
	}
}
