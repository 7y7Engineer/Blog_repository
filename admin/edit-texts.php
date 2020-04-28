<!--Соединение с БД-->
<?php
	include("lock.php");
	include('blocks/bd.php');
	if(isset($_GET['id'])) {$id=$_GET['id']; }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title>Редактирование текстов титульных страниц</title>
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
                    	<h1>Редактирование текстов титульных страниц</h1>
            			<?php
						if(!isset($id))
						{
							$result=mysql_query("SELECT id,title FROM `settings`",$db);
							$myrow=mysql_fetch_array($result);
		
	      				do{	
		  						printf('<h2 class="articles-text"><a href="edit-texts.php?id=%s" class="articles-name-text">%s</a></h2>', $myrow['id'], $myrow['title']);
							}
	      				while($myrow=mysql_fetch_array($result));
						}
						else
						{
							$result=mysql_query("SELECT * FROM `settings` WHERE id=$id",$db);
							$myrow=mysql_fetch_array($result);
print <<<HERE
					   	<form action="update-texts.php" method="post" name="form1">
					   		<p>
            				  <label>Введите название страницы:<br>
			            	    <input id="title" name="title" type="text" value="$myrow[title]">
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите краткое описание страницы:<br>
			            	    <textarea id="meta_description" name="meta_description" cols="60" rows="2">$myrow[meta_description]</textarea>
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите ключевые слова страницы:<br>
 				           	    <input id="meta_keywords" name="meta_keywords" type="text" value="$myrow[meta_keywords]">
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите текст страницы:<br>
			                  	<textarea id="text" name="text" cols="60" rows="11">$myrow[text]</textarea>
			                  </label>
 			               </p>
							<input name="id" type="hidden" value="$myrow[id]">
                              <label>
                            	<p>
                                <input id="submit" name="submit" type="submit" value="сохранить изменения">
                                </p>
                              </label>
	 		           </form>
HERE;
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php include('blocks/footer.php'); ?>
		<div class="share42init" data-top1="150" data-top2="20" data-margin="0"></div>
		<script type="text/javascript" src="../js/share42/share42.js"></script> 
	</body>
</html>