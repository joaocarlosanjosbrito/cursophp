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
      $txt = "este é um exemplo da função wordwrap............................";
      $res = wordwrap($txt, 3, "<br>", true );
      echo "$res"
    ?>
</div>
</body>
</html>
 