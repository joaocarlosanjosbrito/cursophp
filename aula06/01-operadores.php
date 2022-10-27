<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<?php 
		$preco = $_GET ["p"];
		echo "O preço do produto é R$ " . number_format ($preco, 2);
		$preco -= ($preco*10/100);
		echo "<br/> E o novo preço com 10% de aumento será R$ " . number_format ($preco, 2);

	 ?>
</div>
</body>
</html>