<?php
	
	echo ("<br><br>");
	$a = 0;
	while($a < 10){
		echo("Nilai A = ");
		echo("$a, ");
		if($a % 2 == 0){
			echo "Nilai $a adalah bilangan genap <br>";
			echo "<br><br>";
		}else{
			echo "Nilai $a adalah bilangan ganjil <br>";
			echo "<br><br>";
		}
		$a++;
	}
    echo ("Menggunakan Include");
    echo ("<br>");
    include ("latihan31.php");
?>