<?php 
 
 	//criando funções	
	function somarValor($num1,$num2){
		return ($num1 + $num2);
	}
	function subtrairValor($num1,$num2){
		return ($num1 - $num2);
	}
	function multiplicarValor($num1,$num2){
		return ($num1 * $num2);
	}
	function dividirValor($num1,$num2){
		if ($num2 == 0) {
			return "impossível divisão por 0";
		}else{
			return ($num1 / $num2);
		}
	}

	function operacao($operacao)
	{
		return $operacao;
	}

	$num1 = 10.50;
	$num2 = 0.0;
	$oper = 4;

	switch ($oper) {
		case 1:
			$resp = somarValor($num1,$num2);
			$op = operacao("soma");
			break;
		case 2:
			$resp = subtrairValor($num1,$num2);
			$op = operacao("subtração");
			break;
		case 3:
			$resp = multiplicarValor($num1,$num2);
			$op = operacao("multiplicação");
			break;
		case 4:
			$resp= dividirValor($num1,$num2);
			$op = operacao("divisão");
			break;		
	}

	echo "A $op de $num1 e $num2 é: $resp";







 ?>