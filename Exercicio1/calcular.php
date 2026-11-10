<?php 
    $numero01 = htmlspecialchars(trim($_GET["numero01"]));
    $numero02 = htmlspecialchars(trim($_GET["numero02"]));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Recebendo dados de formulário </title>
    </head>
    <body>
        <h1> Recebendo dados para fazer o cálculo </h1>
        <p><? $numero01 ?> + <? $numero02 ?> = <?$numero01 + $numero02?></p>
    </body>
</html>