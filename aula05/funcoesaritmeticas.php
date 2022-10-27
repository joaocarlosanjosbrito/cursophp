<!DOCTYPE html>
<html>
<html language="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funcoes Artimeticas em PHP</title>
	<style>
		h2 {
			font: 15pt Arial;
			color: blue;
			font-weight: black;

		}
	</style>
</head>
<body>
<div>
	<?php
		$v1 = $_GET ["x"];
		$v2 = $_GET ["y"];
		echo "<h2> Valores recebidos: $v1 e $v2<h2/>";
		echo "O valor absoluto de $v2 e " . abs ($v2);
		echo "</br> O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
		echo "</br> A raiz de $v1 e ". sqrt($v1);
		echo "</br> O valor de $v2 arredondado e ". round ($v2); 
		echo "</br> A parte inteira de $v2 e ". intval ($v2);
		echo "</br> O valor de $v1 em moeda e R$" . number_format($v1,2)


	?>
</div>
</body>
</html>