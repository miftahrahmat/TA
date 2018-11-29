<link rel="stylesheet" type="text/css" href="../style.css">
<div class="halaman">
	<h2>Kmpulan Tugas Modul</h2>
	<div class="menu">
			<ul>
			<li><a href="tugasmodul.php?page=latihan2a">LATIHAN 2A</a></li>
			<li><a href="tugasmodul.php?page=latihan2b">LATIHAN 2B</a></li>
			<li><a href="tugasmodul.php?page=latihan2c">LATIHAN 2C</a></li>
			<li><a href="tugasmodul.php?page=tugas1">TUGAS 1</a></li>
			<li><a href="../home.php">BERANDA</a></li>
		</ul>
	</div>
	<div class="beranda">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];

				switch ($page) {
					case 'latihan2a':
						include "latihan2a.php";
						break;
					case 'latihan2b':
						include "latihan2b.php";
						break;
					case 'latihan2c':
						include "latihan2c.php";
						break;
					case 'latihan2d':
						include "latihan2d.php";
						break;
					case 'tugas1':
						include "tugas1.php";
						break;
					default:
					include "beranda.php";
					break;
				}
			}	
	 		?>
</div>