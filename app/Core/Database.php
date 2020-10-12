<?php 

class Database {
	private static $_instance = null;
	private $mysqli;

	public function __construct()
	{
		$this->mysqli = new mysqli('localhost','root','','dbitase') or die('Koneksi tidak ada..');
	}

	public static function getInstance()
	{
		if(!isset(self::$_instance))
		{
			self::$_instance = new Database();
		}
		
		return self::$_instance;
	}

	public function no_inject($data)
	{
		return $this->mysqli->real_escape_string($data);
	}

	public function getAll($table,$n_all = NULL)
	{
		$reply = [];
		
		if(empty($n_all)){
			$query = "SELECT * FROM $table";
		} else {
			$query = "SELECT $n_all FROM $table";
		}

		$result = $this->mysqli->query($query);

		while ($row = $result->fetch_object())
		{
			$reply[] = $row;
		}

		return $reply;
	}

	public function getWhere($table, $data = [],$n_all = NULL)
	{
		if(empty($n_all)){
			$query = "SELECT * FROM $table ";
		} else {
			$query = "SELECT $n_all FROM $table ";
		}

		$ambil = [];
		$i = 0;

		foreach ($data as $key => $value) {
			$ambil[$i] = $key." = '".$value."'";
			$i++;
		}

		$values = implode(' and ', $ambil);

		$query = $query."WHERE $values ";

		$result = $this->mysqli->query($query);

		return $result->fetch_object();
	}

	public function join($table = [], $data1 = [],$data2 = [])
	{
		$query = "SELECT * FROM $table[0] JOIN $table[1] ON ";

		$ambil = [];
		$ambil1 = [];
		$i = 0;
		foreach ($data1 as $key => $value) {
			$ambil[$i] = $key.'.'.$value;
			$i++;
		}

		foreach ($data2 as $key => $value) {
			$ambil1[$i] = $key." = '".$value."'";
			$i++;
		}
		
		$values = implode(' = ', $ambil);
		$values1 = implode(' and ', $ambil1);
	
		if(!empty($values1)){
			$query = $query.$values." WHERE ".$values1;
		} else {
			$query = $query.$values;
		}

		$result = $this->mysqli->query($query);

		while ($row = $result->fetch_object())
		{
			$reply[] = $row;
		}

		return $reply;
	}

	public function insert($table,$arr = array())
	{
		$query = "INSERT INTO $table ";

		$ambil = array();
		$i = 0;

		foreach ($arr as $key) {
			$ambil[$i] = "'".$key."'";
			$i++;
		}

		$values = implode(',', $ambil);

		$query = $query."VALUES ($values)";

		return $this->mysqli->query($query);
	}

	public function update($table, $data = [], $data_b = [])
	{
		$query = "UPDATE $table SET ";
		$temp = [];

		$i = 0;
		foreach ($data as $key => $value) {
			$temp[$i] = $key . " = '" . $value . "'";
			$i++;
		}
		$values = implode(', ', $temp);

		$query = $query."$values ";
		$temp = [];

		foreach ($data_b as $key => $value) {
			$temp[$i] = $key . " = '" . $value . "'";
		}

		$values = implode(' and ', $temp);

		$query = $query."WHERE $values ";
		// echo $query;
		return $this->mysqli->query($query);
	}

	public function delete_($table,$arr = [])
	{
		$query = "DELETE FROM $table ";

		$ambil = [];
		$i = 0;

		foreach ($arr as $key => $value) {
			$ambil[$i] = $key." = '".$value."'";
			$i++;
		}

		$values = implode(' and ', $ambil);

		$query = $query."WHERE $values ";

		return $this->mysqli->query($query);
	}


}