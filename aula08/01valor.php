<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $valor = $_GET ["v"];
    $rq = sqrt ($valor);
    echo "o valor enviado foi $valor e a raiz quadrada foi " . number_format ($rq,2);
        
    ?>
  <a href="01exercicio.html" > Voltar </a>
</div>
</body>
</html>
 