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
    function soma ($a, $b) {
      $s = $a + $b;
      echo "<p> A soma vale $s </p>";         

    }
    
    soma (3,4);
    soma (3,10);
    $f = 15;
    $g = 12;
    soma ($f,$g);        
    ?>
</div>
</body>
</html>
 