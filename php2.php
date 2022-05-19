<?php

	$peso = ($_GET['peso']);  
	$altura = ($_GET['altura']);
	$imc = $peso/($altura*$altura);
	//
	printf("O IMC é:  %.2f", $imc);
	if ($imc > 25) {
		echo "<br> Você está acima do peso";
		echo "<br><br><img src= 'naosaudavel.jpg'>";
	}
	else {
		echo "<br> Você está saudável";
		echo "<br><br><img src= 'saudavel.png'>";
	}
?>