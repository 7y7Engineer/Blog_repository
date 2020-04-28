<!--Соединение с БД-->
<?php
	include("lock.php");
	include('blocks/bd.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title>Удаление статьи по информатике</title>
		<meta http-equiv="Content-Type" content="text/html" charset="windows-1251"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	    <script src="../JS/jquery-1.5.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../js/functions.js"></script>
        <link rel="icon" type="image/png" href="../images/favicon.png" />
	</head>
	<body>
		<div class="karkas">
			<?php include('blocks/head.php'); ?>
			<?php include('blocks/menu.php'); ?>
			<div class="content-main">
				<?php include('blocks/left-bar.php'); ?>
				<div class="content">
					<div class="text">
                    	<h1>удаление</h1>
                        <form action="drop-article-computing.php" method="post">
            			<?php
							$result=mysql_query("SELECT id,title,description,date,author FROM `articles-computing`",$db);
							$myrow=mysql_fetch_array($result);
		
	      				do{	
		  						printf('<table align="center" class="articles">
										<tr>
	   					    				<td class="articles-title">
												<h2><input name="id" type="radio" value="%s"><a href="edit-article-computing.php?id=%s" class="articles-name">%s</a></h2>
												<p>Дата добавления: %s</p>
												<p>Автор статьи: %s</p>
											</td>
	 		    						</tr>
			    							<tr>
		   	  									<td><p class="text-description">%s ...</p></td>
											</tr>
	     			    				</table>'
										,$myrow['id'], $myrow['id'], $myrow['title'], $myrow['date'], $myrow['author'], $myrow['description']);
							}
	      				while($myrow=mysql_fetch_array($result));
						?>
                        <p><input name="submit" type="submit" value="удалить статью" class="submit-del"></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<?php include('blocks/footer.php'); ?>
		<div class="share42init" data-top1="150" data-top2="20" data-margin="0"></div>
		<script type="text/javascript" src="../js/share42/share42.js"></script> 
	</body>
</html>