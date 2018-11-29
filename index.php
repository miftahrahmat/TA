<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form action="proses_login.php" method="post" class="login">
		<h3>Form Login</h3>
		<p><input type="text" class="form-control" name="username" required=""></p>
		<p><input type="password" class="form-control" name="password" required=""></p>
		<p><input type="submit" name="login" value="LOG IN"></p>
		<p><a href="daftar.php"><input type="button" name="daftar" value="DAFTAR"></a></p>
    </form>
</body>
</html>