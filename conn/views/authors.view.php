



<div class="table-responsive">
  <table class="table table-bordered table-condensed table-hover" border="2">
  	<tr class="danger">

    		<td>ID</td>
    		<td>NAME</td>
    		<td>USERNAME</td>
    		<td>VIEW ARTICLE</td>

    	</tr>
    <?php foreach($authors as $author):?>
    
    <tr class="success">
    	<td><?=$author['id']?></td>
    	<td class="warning"><?=$author['name']?></td>
    	<td class="info"><?=$author['username']?></td>
    	<td><a href="article.view.php">View</a></td>


    </tr>

    <?php endforeach;?>
    
  </table>
</div>