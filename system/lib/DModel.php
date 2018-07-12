<?php

class DModel 
{
	protected $db=array();
	
	public function __construct()
	{
		$dsn='mysql:dbname=project; host=localhost';
		$user='root';
		$pass='';
		$this->db = new Database($dsn,$user,$pass);
	}

	
}
?>