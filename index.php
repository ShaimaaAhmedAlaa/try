<?php 
require 'config.php';
require 'class-connection.php';
// I will put the same order like in the construct 
$connection = new Connection($config['database'],$config['username'],$config['password'],$config['host']);
 // if i left the last host blank so it will be on the local host by default if i put sth i have to put the IP of my host :D
$PDO=$connection->connect();
if($PDO){
	echo "connnected!";
	$result = $PDO->query("select * from authors");
}else{
	echo "ERROR IN CONNECTION!";
}


 


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>connection with database</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<td>ID</td>
 			<td>NAME</td>
 			<td>BIRTH</td>
 			<td>WORKS</td>
 			<td>ACTIONS</td>
 		</tr>
 		<?php foreach($result as $author):?>
 		<tr>
 			<td><?= $author['id']?></td>
 			<td><?= $author['name']?></td>
 			<td><?= $author['birth']?></td>
 			<td><?= $author['works']?></td>
 			<td><a href="author.php?id=<?= $author['id']?>">View</a></td>

 		</tr>
 		<?php endforeach;?>
 	</table>

 	<a href="insert.php">Insert Author</a>
 </body>
 </html>