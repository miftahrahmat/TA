<?php 

	$mahasiswa = array(

	[
		"nama" => "Miftah Rahmat",
		"email" => "miftahrahmat13@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "images/1.jpg"
	],
	[
		"nama" => "Syamsul Hadi",
		"email" => "syamsul@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "images/2.jpg"
	],
	[
		"nama" => "Sapril Haryadi",
		"email" => "sapril@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "images/3.jpg"
	]
);	

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar Mahasiswa</title>
	<style type="text/css" media="screen">

		.rounded-circle {
		  border-radius: 50% !important;
		}
		.kotak{
			background-color: white;
			width: 350px;
			padding: 20px;
			margin: auto;
			margin-top: 30px;
			border: 5px solid silver;
			border-radius: 10px;
			font-size: 30px;
		}
		ul{
			list-style: none;
		}
		ul li a{
			text-decoration: none;
			font-size: 25px;
			color: green;
			transition:all 0.2s ease-in-out;
		}
		ul li a:hover,
		ul li a.hoverover {	
			cursor: pointer;	
			color: blue;
		}

		ul li p{
			text-decoration: none;
			font-size: 15px;
			margin-left: 100px;
		}
		ul li img{
			margin-right: 10px;
		}
	</style>
	</head>
<body>	
	<div class="halaman">
		<h3>Daftar Mahasiswa</h3>
		<form class="kotak">
        <?php 
        	foreach ($mahasiswa as $mhs) : 
        ?>
			<ul>
				<li><img class="rounded-circle" src="<?php echo $mhs["gambar"]; ?>" width="32%" >
					<a class="a" href="latihan5c.php?nama=<?= $mhs["nama"]; ?>&email=<?= $mhs["email"]; ?>
					&jurusan=<?= $mhs["jurusan"] ;?>&gambar=<?= $mhs["gambar"]; ?>">
					<?= $mhs["nama"]; ?><br></a>
					<p><?= $mhs["email"]; ?></p>
				<hr>
				</li>
            </ul>
        <?php endforeach; ?>    
   </form>
</div>
</body>
</html>