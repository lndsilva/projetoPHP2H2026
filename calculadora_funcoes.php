<?php 
 
 	//criando funções	
	function somarValor($num1,$num2){
		return ($num1 + $num2);
	}
	function subtrairValor($num1,$num2){
		return ($num1 + $num2);
	}
	function multiplicarValor($num1,$num2){
		return ($num1 + $num2);
	}
	function dividirValor($num1,$num2){
		return ($num1 + $num2);
	}

	function operacao($operacao)
	{
		return $operacao;
	}

	$num1 = 10.50;
	$num2 = 20.0;
	$oper = 1;

	switch ($oper) {
		case 1:
			$resp = somarValor($num1,$num2);
			operacao("soma");
			break;
		case 2:
			$resp = subtrairValor($num1,$num2);
			operacao("subtração");
			break;
		case 3:
			$resp = multiplicarValor($num1,$num2);
			operacao("multiplicação");
			break;
		case 4:
			$resp= dividirValor($num1,$num2);
			operacao("divisão");
			break;		
	}

	echo "A ".operacao."de $num1 e $num2 é: $resp";







 ?>