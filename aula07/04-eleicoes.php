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
    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "Quem nasceu em $ano tem $idade anos de idade";
    $tipo = ($idade>=18 && $idade <=65)?"É OBRIGATÓRIO":"NÃO É OBRIGATÓRIO";
    echo "<br/> Você $tipo a votar"
    
    


  ?>

</div>
</body>
</html>
 