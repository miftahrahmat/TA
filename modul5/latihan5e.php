<?php 

	if ( isset($_POST['login']) ) {

		if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
			header("Location: admin.php");
	}else{
		$error = true;
	}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modul5 - 5e</title>
</head>
<body>
	<div style="padding: 15px">
       <strong><center>LOGIN</center></strong>
                <hr>	
                <?php if (isset($error) ) : ?>
                <p class="alert alert-danger">Username/Password Salah</p>
            	<?php endif; ?>
					<form style="background-color: silver; margin: 5px" action="" method="post">
						<div style="margin-left: 10px; padding: 30px">
							<p><input type="text" name="username" required=""></p> 
					        <p><input type="password" name="password" required=""></p>
			                <div align="center">
		                		<button type="submit" name="login" style="background-color: blue; color: white">LOGIN</button>
		                    </div>
				        </div> 
	                </form>
	            </div>
		    </div>
		</body>
</html>