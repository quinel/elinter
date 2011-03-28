<!-- File: /app/views/posts/index.ctp -->

<h1>Items</h1>

<ul>
<?php foreach ($items as $item): ?>
	<li><?php echo $item['Item']['short_description']; ?>,<?php echo $item['Item']['description']; ?></li>
<?php endforeach?>
</ul>