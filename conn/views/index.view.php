<?php foreach ($articles as $article): ?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="images/<?= $article['image']?>" alt="<?= $article['title']?>">
			<div class="caption">
			    <h3> <?= $article['title'] ?></h3>
			    <p><?= $article['body']?><p>
			    <a href="author.php?id=<?=$article['author-id']?>" class="btn btn-primary" role="button"><?= $article['author-id']?></a>
			    <a href="#" class="btn btn-default" role="button">Read More</a></p>
			</div>
		</div>
	</div>
<?php endforeach; ?>