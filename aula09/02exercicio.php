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

    if ($i <16) {
        $tipoVoto = "Não vota";
    
    }
    elseif (($i >= 16 && $i < 18) || ($i >65)) {  //*&& signifca se e || Ou *//
            $tipoVoto = "Voto opcional";

    }
    else {
            $tipoVoto = "Voto obrigatório";
    }



    echo " Para essa idade, $tipoVoto";
    
    ?>
    <a href="02exercicio.html" > Voltar</a>
</div>
</body>
</html>
 