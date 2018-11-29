<?php
		include "koneksi.php";
		$username  = $_SESSION['username'];
		$cek = mysqli_query($koneksi,"SELECT * from user where username='$username'");
		while($nama=mysqli_fetch_array($cek))
	{ ?>
<div class="header">
	 		<h1><center>Hallo <?php echo $nama['username'];?>
	 			<?php

	                date_default_timezone_set('Asia/Jakarta');
	                $a = date ("H.i.s");
	                if (($a>=1) && ($a<=9)){
	                echo "<b>, Selamat Pagi :)</b>";
	                }
	                else if(($a>10) && ($a<=14))
	                {
	                echo ", Selamat Siang :)";}
	                else if (($a>15) && ($a<=18))
	                {
	                echo ", Selamat Sore :)";}
	                else { echo ", <b> Selamat Malam :) </b>";}
	            ?> 
	 		</center></h1>
	 		
	 		<?php } ?>
</div>