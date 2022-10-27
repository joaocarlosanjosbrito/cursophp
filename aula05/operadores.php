<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operacoes Aritmeticas</title>
</head>
<body>
<div>	
	<?php 
	$n1 = $_GET ["a"];
	$n2 = $_GET ["b"];
	echo "<h2> Valores recebidos: $n1 e $n2 <h2/>";
	$m = ($n1+$n2)/ 2;
	echo "A soma vale ". ($n1+$n2);
	echo "<br/> A subtração vale". ($n1-$n2);
	echo "<br/> A multiplicacao vale". ($n1*$n2);
	echo "<br/> A divisao vale". ($n1/$n2);
	echo "<br/> O modulo vale" . ($n1%$n2);
	echo "<br/> A média entre $n1 + $n2 vale $m"
	 ?>
</div>
</body>
</html>