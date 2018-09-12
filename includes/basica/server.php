<?php
	include "class.php";
	$calc = new Calc;
	$N1 = (isset($_POST["N1"])) ? $_POST["N1"] : "0";
	$N2 = (isset($_POST["N2"])) ? $_POST["N2"] : "0";
	$operacao = (isset($_POST["operacao"])) ? $_POST["operacao"] : "0";
	switch ($operacao) {
		case 'somar':
			$resultado="Resultado: " . $calc->somar($N1,$N2);
			break;
		case 'subtrair':
			$resultado="Resultado: " . $calc->subtrair($N1,$N2);
			break;
		case 'multiplicar':
			$resultado="Resultado: " . $calc->multiplicar($N1,$N2);
			break;
		case 'dividir':
			$resultado="Resultado: " . $calc->dividir($N1,$N2);
			break;
	}
	if ($operacao=='dividir' && $N2==0) {
		$resultado=" ";
		$erro="Não é possível dividir por zero!";
	}
?>