<?php 
require 'config.php';
require 'class-connection.php';
// I will put the same order like in the construct 
$connection = new Connection($config['database'],$config['username'],$config['password'],$config['host']);
 // if i left the last host blank so it will be on the local host by default if i put sth i have to put the IP of my host :D
$PDO=$connection->connect();
if($PDO){
	try{
		$id = htmlspecialchars($_GET['id']);
		$stmt = $PDO->prepare("SELECT * FROM authors WHERE id=:id");
		$stmt->execute ([":id"=> $id]);
		// while ($row= $stmt->fetch(PDO::FETCH_OBJ)) {
		// 	var_dump($row->id);
		// }
		$result=$stmt->fetchAll();

		if (count($result)) {
			foreach ($result as $author) {
				var_dump($author);
			}
		}
	}
	catch(Exception $e){ 
		echo "Error selecting data";
	}
}else{
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>author page</title>
 </head>
 <body>
 	<ul>
 	<?php foreach ($result as $author): ?>
		<li>
			<?= $author['name'];?>
		</li>
	<?php endforeach; ?>
 	</ul>
 </body>
 </html>