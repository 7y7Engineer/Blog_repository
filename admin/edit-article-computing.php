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
		<title>Редактирование статьи по информатике</title>
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
                    	<h1>Редактирование</h1>
            			<?php
						if(!isset($id))
						{
							$result=mysql_query("SELECT id,title,description,date,author FROM `articles-computing`",$db);
							$myrow=mysql_fetch_array($result);
		
	      				do{	
		  						printf('<table align="center" class="articles">
										<tr>
	   					    				<td class="articles-title">
												<h2><a href="edit-article-computing.php?id=%s" class="articles-name">%s</a></h2>
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
						}
						else
						{
							$result=mysql_query("SELECT * FROM `articles-computing` WHERE id=$id",$db);
							$myrow=mysql_fetch_array($result);
print <<<HERE
					   	<form action="update-article-computing.php" method="post" name="form1">
					   		<p>
            				  <label>Введите название статьи:<br>
			            	    <input id="title" name="title" type="text" value="$myrow[title]">
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите краткое описание статьи:<br>
			            	    <textarea id="meta_description" name="meta_description" cols="60" rows="2">$myrow[meta_description]</textarea>
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите ключевые слова статьи:<br>
 				           	    <input id="meta_keywords" name="meta_keywords" type="text" value="$myrow[meta_keywords]">
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите дату добавления статьи в формате xxxx-xx-xx:<br>
			            	    <input name="date" type="text" id="date" value="$myrow[date]">
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите описание статьи:<br>
			                    <textarea id="description" name="description" cols="60" rows="3">$myrow[description]</textarea>
			                  </label>
			                </p>
			                <p>
			            	  <label>Введите текст статьи:<br>
			                  	<textarea id="text" name="text" cols="60" rows="11">$myrow[text]</textarea>
			                  </label>
 			               </p>
			                <p>
 				           	  <label>Введите имя автора статьи:<br>
			            	    <input id="author" name="author" type="text" value="$myrow[author]">
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