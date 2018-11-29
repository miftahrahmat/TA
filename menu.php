	<div class="menu">
		<ul>
			<li><a href="home.php">BERANDA</a></li>
			<li><a href="pdf/pdf.php?page=tugaspdf">TUGAS PDF</a></li>
			<li><a href="modul/tugasmodul.php?page=tugasmodul">TUGAS MODUL</a></li>
			<li><a href="modul2/tugasmodul.php?page=tugasmodul2">TUGAS MODUL II</a></li>
			<li><a href="modul5/tugasmodul.php?page=tugasmodul3">TUGAS MODUL III</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<form method="post">
		<center><button type="submit" name="cari">Percepat waktu</button></center>
	</form></br>
 	<div class="beranda">
		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				switch ($page) {
					case 'tugaspdf':
						include "pdf/pdf.php";
						break;
					case 'tugasmodul':
						include "modul/tugasmodul.php";
						break;
					case 'tugasmodul2':
						include "modul2/tugasmodul.php";
						break;
					case 'tugasmodul3':
						include "modul5/tugasmodul.php";
						break;
					default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
				}	
			    }else{
				include "halaman/beranda.php";
			}	
	 	?>
	</div>
