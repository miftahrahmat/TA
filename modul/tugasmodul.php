<link rel="stylesheet" type="text/css" href="../style.css">
<div class="halaman">
	<h2>Kumpulan Tugas Modul</h2>
	<div class="menu">
			<ul>
			<li><a href="tugasmodul.php?page=latihan1a">LATIHAN 1A</a></li>
			<li><a href="tugasmodul.php?page=latihan1b">LATIHAN 1B</a></li>
			<li><a href="tugasmodul.php?page=latihan1c">LATIHAN 1C</a></li>
			<li><a href="kalkulator.php">KALKULATOR</a></li>
			<li><a href="../home.php">BERANDA</a></li>
		</ul>
	</div>
	<div class="beranda">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];

				switch ($page) {
					case 'latihan1a':
						include "latihan1a.php";
						break;
					case 'latihan1b':
						include "latihan1b.php";
						break;
					case 'latihan1c':
						include "latihan1c.php";
						break;
					default:
					include "beranda.php";
					break;
				}

			}	
	 		?>
	</div>
</div>