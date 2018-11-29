<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modul 2 - latihan 2</title>
	<style>
		.kontak {
				border: none;
				border-spacing: 8px;
				
				}

		td {
			background-color: #003;
			color: #fff;
			border: 2px;
		}
	</style>	
</head>
<body>
	<div class="halaman">
	<table class="kontak" border="1" cellpadding="3" width="15%" align="center">
		<tr>
			<tr>
				<td><?php echo "1" ?></td>
			</tr>
        	<tr>
				<td style="background-color: #999;"><?php echo "1" ?></td>
    			<td style="background-color: #999;"><?php echo "2" ?></td>
        	</tr>
    		<tr>
    			<td><?php echo "1"; ?></td>
	    		<td><?php echo "2" ?></td>
	        	<td><?php echo "3" ?></td>
    		</tr>
    		<tr class="genap">
    			<td style="background-color: #999;"><?php echo "1"; ?></td>
	    		<td style="background-color: #999;"><?php echo "2" ?></td>
	        	<td style="background-color: #999;"><?php echo "3" ?></td>
	        	<td style="background-color: #999;"><?php echo "4" ?></td>
    		</tr>
			<tr>
				<td><?php echo "1"; ?></td>
	    		<td><?php echo "2" ?></td>
	        	<td><?php echo "3" ?></td>
	        	<td><?php echo "4" ?></td>
	        	<td><?php echo "5" ?></td>
			</tr>
		</tr>
	</table>
	</div>
	</body>
</html>