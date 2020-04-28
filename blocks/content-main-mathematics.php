<div class="content-main">
	<?php include('blocks/left-bar.php'); ?>
	<div class="content">
        <?php include('blocks/search.php'); ?>
		<div class="text">
        <p><?php echo $myrow['text']; ?></p>
        <?php 
			$result=mysql_query('SELECT id,title,description,date,author FROM `articles-mathematics`',$db);
			$myrow=mysql_fetch_array($result);
		
	      do{	
		  		printf('<table align="center" class="articles">
						<tr>
	   					    <td class="articles-title">
								<h2><a href="view-article-mathematics.php?id=%s" class="articles-name">%s</a></h2>
								<p>Дата добавления: %s</p>
								<p>Автор статьи: %s</p>
							</td>
	 		    		</tr>
			    			<tr>
		   	  					<td><p class="text-description">%s ...</p></td>
							</tr>
	     			    </table>', $myrow['id'], $myrow['title'], $myrow['date'], $myrow['author'], $myrow['description']);
			}
	      while($myrow=mysql_fetch_array($result));
		?>
        </div>
	</div>
</div>