<?php 

	//criando uma função em php sem parâmetros

	function somaValor(){
		echo "Somando...";
	}

	//criando uma função em php com parâmetros

	function imprimirNome($nome){
		echo "<br />Olá $nome";
	}

	function somar($num1,$num2){
		return ($num1 + $num2);
	}

	//executando a função
	somaValor();
	imprimirNome("Etecia");
	echo("<br>");
	$resultado = somar(10.50,20.0);
	echo ("O resultado da soma $resultado");
	echo "<br>O resultado direto chamando a função:" . somar(30,50) + soma(10.50,20.35);

 ?>