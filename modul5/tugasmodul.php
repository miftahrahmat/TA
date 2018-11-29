<link rel="stylesheet" type="text/css" href="../style.css">
<div class="halaman">
	<h2>Kmpulan Tugas Modul III </h2>
	<div class="menu">
		<ul>
			<li><a href="tugasmodul.php?page=latihan5a">LATIHAN 5A</a></li>
			<li><a href="tugasmodul.php?page=latihan5b">LATIHAN 5B</a></li>
			<li><a href="tugasmodul.php?page=latihan5d">LATIHAN 5D</a></li>
			<li><a href="tugasmodul.php?page=latihan5e">LATIHAN 5E</a></li>
			<li><a href="../home.php">BERANDA</a></li>
		</ul>
	</div>
	<div class="beranda">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'latihan5a':
				include "latihan5a.php";
				break;
			case 'latihan5b':
				include "latihan5b.php";
				break;
			case 'latihan5d':
				include "latihan5d.php";
				break;
			case 'latihan5e':
				include "latihan5e.php";
				break;					
			default:
				include "beranda.php";
				break;
			}
		}
	?>	
</div>
	</p>
</div>