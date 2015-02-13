
<?php require'app/app.php'; ?>

	<div class="table-responsive">
  		<table class="table table-bordered table-condensed table-hover" border="2">
  			<tr class="danger">
 				<td>TILTLE</td>
 				<td>BODY</td>
 				<td>IMAGE</td>
 			</tr>
 			 <?php foreach ($articles as $article):?>

			<tr>
				<td><?=$article['title']?></td>
				<td><?=$article['body']?></td>
				<td><?=$article['image']?></td>
			</tr>
		   <?php endforeach;?>
 		</table>
 	</div>

 