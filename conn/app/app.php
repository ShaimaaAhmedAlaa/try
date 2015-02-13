<?php 

	
	namespace app\DB;
	use \PDO;
 // require files

	require "app/db-class.php";	
	require "app/config/database.php"; 
	require "view.php";

	//creat db object

	$db = new DB($config);
//get the BDO object or connection
	$conn = $db->connect();
	// because in the class it will return $conn
	//check connection success
	if(!$conn)die("Error in db");
	


	
 ?>