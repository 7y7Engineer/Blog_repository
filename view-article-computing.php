<!--���������� � ��-->
<?php
	include('blocks/bd.php');
	if(isset($_GET['id'])) { $id=$_GET['id']; }
	$result=mysql_query("SELECT * FROM `articles-computing` WHERE id='$id'",$db);
	$myrow=mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
    	<meta name="description" content="<?php echo $myrow['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $myrow['meta_keywords']; ?>">
		<title><?php echo $myrow['title']; ?></title>
		<meta http-equiv="Content-Type" content="text/html" charset="windows-1251"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	    <script src="JS/jquery-1.5.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/functions.js"></script>
        <link rel="icon" type="image/png" href="images/favicon.png" />
	</head>
	<body>
		<div class="karkas">
			<?php include('blocks/head.php'); ?>
			<?php include('blocks/menu.php'); ?>
			<?php include('blocks/content-main-articles.php'); ?>
		</div>
		<?php include('blocks/footer.php'); ?>
		<div class="share42init" data-top1="150" data-top2="20" data-margin="0"></div>
		<script type="text/javascript" src="js/share42/share42.js"></script> 
	</body>
</html>