<?php
	
	//criando função

	function somaValor(){

		$num1 = 34;
		$num2 = 46;
		$resp = $num1 + $num2 ;

		echo "O valor da soma é ".$resp;
	} 

	somaValor(); //chamando função



	//criando função

	function somaNumeros($num1,$num2){

		$resp = $num1 + $num2;

		echo "<br><br>O valor da soma é ".$resp;
	}

	somaNumeros(10.30,50.30); //chamando função




	//criando função

	function somaNum($num1, $num2){

		return ($num1+$num2);

	}

	echo "<br><br>A soma dos números é " . somaNum(20.35,80,50); //chamando função

 ?>