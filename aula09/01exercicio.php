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
    $a = isset($_GET["ano"])? $_GET ["ano"]:1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e tera $i anos";
    
    if ($i >= 18) {
      $v = "Já pode votar";
      $d = "Já pode dirigir";
    }
    else {
      $v = "Não pode votar";
      $d = "Não poderá dirigir";
    }
    echo " e você $v e também $d";
        
    ?>
    <a href="01exercicio.html" > Voltar</a>
</div>
</body>
</html>
 