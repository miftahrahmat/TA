<form action="" method="post">
	
<p>
	<input type="search" name="keyword" autofocus placeholder="Cari nomor yang hilang">
	<button type="submit" name="cari">cari</button>
</p>


</form>
<?php 

	for ($i=5; $i >=1 ; $i--) {
 		echo '<p>';
		for ($j=1; $j<=$i ; $j++) {
 		echo $j;
 		}
 		echo '<br>';
	}
?>

	
	