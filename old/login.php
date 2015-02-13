<?php 

define("USERNAME","shaimaa");
define("PASSWORD","zzz");

if($_POST["username"] === USERNAME && 
	$_POST["password"] === PASSWORD) {
	// echo "welcome". $_POST['$username'];
	header("Location: index.php");
}
else{
	echo "check ur username and ur password";
}

?>