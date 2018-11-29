<div class="halaman">
<?php

$a = array(" <p>Angka 1 adalah bilangan ganjil</p>",
		   " <p>Angka 2 adalah bilangan genap sekaligus bilangan prima</p>",
	       " <p>Angka 3 adalah bilangan ganjil sekaligus bilangan prima</p>",
		   " <p>Angka 4 adalah bilangan genap",
	       " <p>Angka 5 adalah bilangan ganjil sekaligus bilangan prima</p>",
	       " <p>Angka 6 adalah bilangan genap",
		   " <p>Angka 7 adalah bilangan ganjil sekaligus bilangan prima</p>",
		   " <p>Angka 8 adalah bilangan genap</p>",
		   " <p>Angka 9 adalah bilangan ganjil</p>",
		   " <p>Angka 10 adalah bilangan genap</p>",
		   " <p>Angka 11 adalah bilangan ganjil sekaligus bilangan prima</p>",
		   " <p>Angka 12 adalah bilangan genap</p>",
		   " <p>Angka 13 adalah bilangan ganjil sekaligus bilangan prima</p>",
		   " <p>Angka 14 adalah bilangan genap</p>",
		   " <p>Angka 15 adalah bilangan ganjil</p>"
);

$angka = array(
	'a' => $a
);

foreach($angka as $key => $jenis) {
    foreach($jenis as $huruf) {
       echo "$huruf</br>";
    }
}
?>
</div>

