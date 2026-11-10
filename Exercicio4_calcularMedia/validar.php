<?php
    // Formas de conversão para Float: 
    $NotaP1 = floatval($_POST["notaP1"]);
    $NotaP2 = (float)$_POST["notaP2"];

    $Media = ($NotaP1 + $NotaP2) / 2;

    if ($Media > 10 or $Media < 0) {
        $Mensagem1 = "<h2 class 'reprovado'> ERRO! Insira uma nota válida!</h2>";
        $Mensagem2 = "<h2 class 'reprovado'> ERRO! Insira uma nota válida!</h2>";
        $Mensagem3 = "<h2 class 'reprovado'> ERRO! Insira uma nota válida!</h2>";
        $Mensagem4 = "<h2 class 'reprovado'> ERRO! Insira uma nota válida!</h2>";

    } else if ($Media >= 7) {
        $mensagem1 = "<h2 class = 'aprovado'> PARABÉNS! VOCÊ ESTÁ APROVADO! </h2>";
        $mensagem2 = "<h2 class 'aprovado'> Nota P1: $NotaP1</h2>";
        $mensagem3 = "<h2 class 'aprovado'> Nota P2: $NotaP2</h2>";
        $mensagem4 = "<h2 class 'aprovado'> Média: $Media </h2>";

    } else if ($Media <= 7 && $Media >= 4) {
        $mensagem1 = "<h2 class = 'recuperacao'> Hm você não foi muito bem, está de RECUPERAÇÃO... </h2>";
        $mensagem2 = "<h2 class 'recuperacao'> Nota P1: $NotaP1</h2>";
        $mensagem3 = "<h2 class 'recuperacao'> Nota P2: $NotaP2</h2>";
        $mensagem4 = "<h2 class 'aprovado'> Média: $Media </h2>";

    } else {
        $mensagem1 = "<h2 class = 'reprovado'> NÃÃO PASSOU! ESTÁ REPROVADO! </h2>";
        $mensagem2 = "<h2 class 'reprovado'> Nota P1: $NotaP1</h2>";
        $mensagem3 = "<h2 class 'reprovado'> Nota P2: $NotaP2</h2>";
        $mensagem4 = "<h2 class 'aprovado'> Média: $Media </h2>";

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Validar Média </title>
        <Style>
            .aprovado {
                color: green;
            }

            .recuperacao {
                color: yellow;
            }

            .reprovado {
                color: red;
            }
        </Style>
    </head>
    <body>
        <h1>Validando a Média!</h1>
        <h2>Desenv Web II: </h2>
        <?= $mensagem1 ?>
        <?= $mensagem2 ?>
        <?= $mensagem3 ?>
        <?= $mensagem4 ?>
    </body>
</html>
