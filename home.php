 <?php
session_start();
if(!isset($_SESSION ['username'])){
 header ('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Home</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<?php 
			include "header.php";
		 ?>
	 	<?php 
	 		include "menu.php";
	 	 ?>
	</div>
</body>
</html>