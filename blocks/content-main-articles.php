<div class="content-main">
	<?php include('blocks/left-bar.php'); ?>
	<div class="content">
        <?php include('blocks/search.php'); ?>
    	<h1><?php echo $myrow['title']; ?></h1>
        <div class="articles-title-f">
        	<p>Дата добавления: <?php echo $myrow['date']; ?></p>
        	<p>Автор статьи: <?php echo $myrow['author']; ?></p>
        </div>
		<div class="text-articles">
        	<p><?php echo $myrow['text']; ?></p>
		</div>
	</div>
</div>