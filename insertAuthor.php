<?php 
require'config.php';
require 'class-connection.php';


if (isset($_POST['add'])) {
	
	$name  = htmlspecialchars($_POST['name']);
	$birth  = htmlspecialchars($_POST['birth']);
	$works  = htmlspecialchars($_POST['works']);
	$actions  = htmlspecialchars($_POST['actions']);

	$connection = new Connection($config['database'],$config['username'],$config['password'],$config['host']);
	$PDO=$connection->connect();
	if($PDO){
	try{
		
		$stmt = $PDO->prepare("INSERT INTO authors (name, birth, works ) VALUES (:name, :birth, :works)");
		$stmt->execute ([":name"=>$name,":birth"=>$birth,":works"=>$works]);

		if(count($stmt->rowCount())){
			echo " inserted correctly";
		}else{
				echo "something went wrong while inserting data";
			}
	
	}catch(Exception $e) { 
		echo "Error selecting data";
	}

	}else {
		echo "Error in connection";


}
}else{
	header("location: index.php");
}

 ?>
