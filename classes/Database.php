<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

//class for the database connection and operations
class Database
{
	public $host="localhost";
	public $port=3306;
	public $dbname="xxx";
	public $user="xxx";
	public $password="xxx";
	public $db_object;	// PDO Objekt
	
	public function __construct()
	{
		$this->openConnection();
	}

	protected function openConnection()
	{
		$this->db_object = new PDO("mysql:host=".$this->host."; dbname=".$this->dbname.";port:".
		$this->port."",$this->user, $this->password,

			array
			(
				PDO::ATTR_ERRMODE 					=> PDO::ERRMODE_WARNING,
				PDO::ATTR_DEFAULT_FETCH_MODE 		=> PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_USE_BUFFERED_QUERY 	=> true,
				PDO::MYSQL_ATTR_INIT_COMMAND 		=> "SET NAMES utf8"
			)
		);		
	}

	public function sqlRun($sql, $array = array())
	{
		$answer = $this->db_object->prepare($sql);
		$answer->execute($array);
		return $answer;
	}
    
	public function sqlInsert($sql, $array = array())
	{
		$answer = $this->sqlRun($sql, $array);
		return $this->db_object->lastInsertId();
	}

	public function sqlUpdate($sql, $array = array())
	{
		$answer = $this->sqlRun($sql, $array);
	}

    public function sqlDelete($sql, $array = array())
	{
		$answer = $this->sqlRun($sql, $array);
	
	}
    
	public function sqlSelect($sql, $array = array())
	{
		$answer = $this->sqlRun($sql, $array);
		$data = $answer->fetchAll();
		return $data;
	}		
}

?>