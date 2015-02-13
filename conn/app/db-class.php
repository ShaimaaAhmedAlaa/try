<?php 
/**
 * database connection
 */
	namespace app\DB;
	use \PDO;


 class  DB
 {
 	private $username;
 	private $database;
 	private $password;
 	private $host;

 	
 	public function __construct($config)
 	{
 		$this->username = $config["username"];
 		$this->password = $config["password"];
 		$this->database = $config["database"];
 		$this->host = $config["host"];

 	
 	}


 	public function connect(){
 		try {
		$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->username,$this->password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		
		return $conn;
		} catch (Exception $e) {
		return false;
		}
	}


	public function query($sql,$data,$conn)
	{
		$stmt = $conn->prepare ($sql);
		$stmt->execute($data);

		$result = $stmt->fetchAll();
		return $result ? $result : false;
	}


 } 

 ?>