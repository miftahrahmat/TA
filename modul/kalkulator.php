<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css" media="screen">
		body{
	background-color: #F2F2F2;
	font-family: algerian;
}

.kalkulator{
	width: 335px;
	background-color: #2F495A;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 15px;
	box-shadow: 0px 15px 20px 0px #D1D1D1;
}

.bilangan{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}

.opt{
	font-size: 16pt;
	border: none;
	width: 215px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}

.tombol{
	background-image: orange;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 8px;
	padding: 10px 20px;
	color: black;
	font-family: algerian;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}
.judul{
	text-align: center;
	color: white;
	font-weight: normal;
}
	</style>
	</head>
<body class="kalkulator">
	<?php 
	
	if(isset($_POST['hitung'])){
		$a = $_POST['a'];
		$b = $_POST['b'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $a+$b;
			break;
			case 'kurang':
				$hasil = $a-$b;
			break;
			case 'kali':
				$hasil = $a*$b;
			break;
			case 'bagi':
				$hasil = $a/$b;
			break;			
		}
	}
	?>
	<div>
		<h2 class="judul">
			<?php 
				$tampil = "Selamat datang di aplikai kalkulator";
				echo str_replace("a", "*", "$tampil");

			 ?>
		</h2>
		<h2 class="judul">
				<?php 

					echo substr("Welcome to app kalkulator",0);

				 ?>
		</h2>
			
		 <h2 class="judul">
		 	<?php 
				echo date('d-m-Y', strtotime('now') ); 
		    ?>
		    	
		    </h2>
		<form method="post" action="">			
			<input type="text" name="a" class="bilangan" placeholder="Angka Pertama">
			<input type="text" name="b" class="bilangan" placeholder="Angka Kedua">
			<select name="operasi" class="opt">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" class="tombol" value="Hitung">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" class="bilangan" value="<?php echo $hasil; ?>">
		<?php }else{ ?>
			<input type="text" class="bilangan" value="">
		<?php } ?>			
	</div>
	<h2 class="judul">Versi
		<?php 

			echo substr_count("opat. opat","opat");

		?>
	</h2>
</body>
</html>