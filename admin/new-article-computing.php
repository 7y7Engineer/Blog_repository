<?php include("lock.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
	<head>
		<title>Добавление новой статьи по информатике</title>
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
            			<form action="add-article-computing.php" method="post" name="form1">
            				<?php include('blocks/form1.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php include('blocks/footer.php'); ?>
		<div class="share42init" data-top1="150" data-top2="20" data-margin="0"></div>
		<script type="text/javascript" src="../js/share42/share42.js"></script> 
	</body>
</html>