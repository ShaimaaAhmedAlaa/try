<?php 
	
	//initiate app
	require'app/app.php';
	//get data
	$articles = $db->query("SELECT * FROM articles",[],$conn);
	//view data
	View::make("index",["articles"=>$articles, "title"=>"Home","active"=>"home"]);

 ?>

