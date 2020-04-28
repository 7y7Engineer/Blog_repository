<!--Соединение с БД-->
<?php
	include("lock.php");
	include('blocks/bd.php');
	if(isset($_POST['id']))               { $id=$_POST['id']; }
	if(isset($_POST['title']))            { $title=$_POST['title']; if($title=='') {unset($title);} }
	if(isset($_POST['meta_description'])) { $meta_description=$_POST['meta_description']; if($meta_description=='') {unset($meta_description);} }
	if(isset($_POST['meta_keywords']))    { $meta_keywords=$_POST['meta_keywords']; if($meta_keywords=='') {unset($meta_keywords);} }
	if(isset($_POST['date']))             { $date=$_POST['date']; if($date=='') {unset($date);} }
	if(isset($_POST['description']))      { $description=$_POST['description']; if($description=='') {unset($description);} }
	if(isset($_POST['text']))             { $text=$_POST['text']; if($text=='') {unset($text);} }
	if(isset($_POST['author']))           { $author=$_POST['author']; if($author=='') {unset($author);} }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title>Обработчик</title>
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
                    	<!--Проверка полей-->
                    	<?php 
						   if(isset($title)
							  &&
							  isset($meta_description)
							  &&
							  isset($meta_keywords)
							  &&
						      isset($date)
							  &&
							  isset($description)
							  &&
							  isset($text)
							  &&
							  isset($author)
							  )
							  {
								$result=mysql_query("UPDATE `articles-physics` SET title='$title',meta_description='$meta_description',meta_keywords='$meta_keywords',date='$date',description='$description',text='$text',author='$author' WHERE id='$id'");
								if($result=='true') {echo "<h1>Данные успешно обновлены в БД !</h1>";}
								else {echo "<h1>Данные не обновлены в БД !</h1>";}
							  }
						  else{
							  echo "<h1>Заполните все поля !</h1>";
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