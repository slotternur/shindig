
<?php foreach($posts as $i=>$post) : ?>
<div id="shindig-post">
	<h2 id="shindig-post-title"><?php echo $post->title ?></h2>
	<div id="shindig-post-content">
		<?php echo $post->post_content ?>
	</div>
</div>
<?php endforeach; ?>

<?php  echo $pagination ?>