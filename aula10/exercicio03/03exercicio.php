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
      $estado = isset($_GET["es"])?$_GET["es"]:0;
      switch ($estado) {
        case 2:
        case 3:
        case 4:
        case 5:
          echo "Você é do nordeste";

   
      }
    
    ?>
    
    
    <a href="javascript:history.go(-1)"  class="botao"> Voltar</a>
</div>
</body>
</html>
 