<link rel="stylesheet" type="text/css" href="../style.css">
<div class="halaman">
	<h2>Kumpulan Tugas PDF</h2>
	<div class="menu">
		<ul>
		    <li><a href="../home.php" title="">BERANDA</a></li>
		    <li><a href="pdf.php?page=tugas1">TUGAS 1</a></li>
		    <li><a href="pdf.php?page=tugas2">TUGAS 2</a></li>
		    <li><a href="pdf.php?page=tugas3">TUGAS 3</a></li>
		    <li><a href="pdf.php?page=tugas4">TUGAS 4</a></li>
		</ul>
		
	</div>
	<div class="beranda">
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'tugas1':
					include "tugas1.php";
					break;
				case 'tugas2':
					include "tugas2.php";
					break;
				case 'tugas3':
					include "tugas3.php";
					break;
				case 'tugas4':
					include "tugas4.php";
					break;
				default:
					include "beranda.php";
					break;
				}
			}
	?>	
	</div>
</div>