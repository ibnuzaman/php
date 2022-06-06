<?php
	$a = 5;
	$b = 2;
	$hasiljumlah = $a + $b;
	echo ($a." + ".$b." = ".$hasiljumlah);
	echo "<br><br>";
	$hasilkali = $a*$b;
	echo ($a." * ".$b." = ".$hasilkali);
	echo "<br><br>";

	if ($a == $b){
		echo("maka, bilangan ".$a." = bilangan ".$b);
	}else if($a > $b){
		echo("maka, bilangan ".$a." > bilangan ".$b);
	}else{
		echo("maka, bilangan ".$a." < bilangan ".$b);
	}
?>