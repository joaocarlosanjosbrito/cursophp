<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
    $v = array (
      "nome"=> "ana",
      "idade"=> 23,
      "peso" => 90.5
    );
    $v["fuma"] = true;



    foreach ($v as $k => $c) {
      echo "O campo $k possui o contedeu $c <br>";
    }

    ?>
    </pre>
</div>
</body>
</html>
 