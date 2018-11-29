<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>profil mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<div class="row justify-content-center" style="padding: 15px">
       <div class="col-md-5">
            <div class="card-header">
            	<strong><center>Ini adalah halaman Latihan5c</center></strong>
            	<hr>
                <strong><center>Profil Mahasiswa</center></strong>
                <hr>	
					<form>
						<div style="padding: 10px" align="center">
							<p><img src="<?php echo $_GET["gambar"]; ?>" class="rounded-circle" width="30%"></p>
							<p><strong><?php echo $_GET["nama"]; ?></strong></p>
							<p><?php echo $_GET["email"]; ?></p>
							<p><?php echo $_GET["jurusan"]; ?></p>
							<a href="tugasmodul.php?page=latihan5b">Kembali ke daftar</a> || 
							<a href="tugasmodul.php">Kembali ke Modul</a>
				        </div> 
	                </form>
	            </div>
		    </div>
		</div>
	</body>
</html>