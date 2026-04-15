<?php 

	$num1 = array(10,20,30,40);

	$num2 = array(50,60,70,80);

	$resp = 0;
	$resp2 = 0;

	for ($i=0; $i < count($num1) ; $i++) { 
		$resp = $resp + $num1[$i];
	}

	for ($i=0; $i < sizeof($num2) ; $i++) { 
		$resp2 = $resp2 + $num2[$i];
	}

	echo $resp . "<br>";
	echo $resp2;


 ?>