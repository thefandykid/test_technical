<?php

$uangtabungan = 3000000;
$bunga;

for($i=1;$i<=12;$i++){
	$bunga = ($uangtabungan*2.5)/100;
	$uangtabungan += $bunga;
	echo "Tabungan bulan ke $i adalah $uangtabungan <br>";	
}


?> 