<?php 

	require'app/app.php';


	$authors = $db->query("SELECT * FROM authors",[],$conn);
//	var_dump($authors);
	
	//view data
	View::make("authors",["authors" => $authors, "title"=> "Authors", "active"=>"authors"]);
 ?>
