<?php $hello = "<h1>Welcome to PHP!</p>";  
	   $age = 10;
	   //associative array
        $persons = ["sara" => "18",
        			"ahmed" => "19",
        			"mohamed" => "25",
        			"wessam" => "27",
        			"samar" => "23"]
        // I can make kinda collection by making an array inside another
        $others = ["mona" => [ $age =>"18", $email => "sara-soso@gmail.com", $gender =>"girl"],
        			"karim" => [$age =>"51", $email => "kimokk@gmail.com", $gender =>"boy"],
        			"Mohsen" => [$age =>"24", $email => "mohsenjg@gmail.com", $gender =>"boy"];
        			]


//	if($age < 18){
//		$message = "You  are not allowed to be here";
//	}
//	else {
//		$message = "welcome here!";
//	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>welcome PHP!</title>
</head>
<body>
<!--
	<h1>what? 
	 <?php echo $message; ?> 

	</h1>
-->
    <?php if($age < 18): ?>
    <h1> noooo </h1>
    <p> lorem jbfk o j fv jhif  hj vfh fvhi vfn uh v hj vfknf vkh kf hibfknin mslm;pojalhuqnih h ll fbpio lkn jh vrh vjjknk </p>
    <?php else:?>
        <h1>yeaaah</h1>
        <p>mostly allowed</p>
    <?php endif; ?> 

    <br>

    <table border="3">
    <tr>
    	<td>NAME</td>

    	<td>AGE</td>
    </tr>
    <?php foreach($persons as $key => $value):?>
    
    <tr>
    	<td><?php echo $key;?> </td>
    	<td><?php echo $value;?></td>
    </tr>
    <?php endforeach;?>
    </table>

    <br>
    <!-- working on others array  -->
    <table>
    	<tr>
    		<td class="primary">name</td>
    		<td>age</td>
    		<td>email</td>
    		<td>gender</td>
    	</tr>
    	<?php foreach($others as $name => $details):?>
    	<tr>
    		<td> <?php echo $name;?></td>
    		<td> <?php echo $details;?></td>

    	</tr>
    <?php endforeach;?>
    </table>
        

</body>
</html> 