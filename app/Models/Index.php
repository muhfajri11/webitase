<?php 

class Index {

	private $db;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function getUrl()
	{
		return $this->db->getAll('rulebook');
	}

}