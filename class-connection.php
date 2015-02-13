<?php 

/**
* 
*/
class connection
{
	private $host;
	private $database;
	private $username;
	private $password;
	public function __construct($database,$username,$password,$host="localhost")
	{
		$this->host= $host;
		$this->database = $database;
		$this->username = $username;
		$this->password= $password;
	}
	public function connect(){

		try {
			$PDO = new PDO("mysql:hostname=".$this->host.";dbname=".$this->database,$this->username,$this->password);
			$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $PDO;
		} 
		catch(PDOexception $e){
		echo $e->getMessage();
		return false;
		}
		}

}







 ?>