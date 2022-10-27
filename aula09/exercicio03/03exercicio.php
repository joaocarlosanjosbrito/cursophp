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
      $n1 = isset($_GET["n1"])? $_GET["n1"]:0;
      $n2 = isset($_GET["n2"])? $_GET["n2"]:0;
      $r = ($n1 + $n2)/2;
  echo "A primeira nota foi $n1 e a segunda $n2 e a media foi $r";

      if ($r >=6) {
        $resultado = " Aluno Aprovado";

      }

      elseif ($r <6) {
         $resultado = " Aluno Reprovado";
      }

      echo "$resultado";



    ?>
    <a href="03exercicio.html" > Voltar</a>
</div>
</body>
</html>
 