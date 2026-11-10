<?php 
// a função trim remove espaços antes e depois do nome
// a função htmlespecialchars ajuda a evitar ataques no site
$nome = htmlspecialchars(trim($_GET["nome"]));
$idade = htmlspecialchars(trim($_GET["idade"]));
$diasVividos = $idade *365;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Recebendo dados de formulário </title>
    </head>
    <body>
        <h1> Recebendo dados de formulário</h1>
        <p>Prazer em conhecê-lo(a), <?= $nome ?>!</p>
        <p>Vi que você tem <? $idade ?> ano(s).</p>
        <p>Você já viveu pelo menos <?= $diasVividos?> dias.</p>
    </body>
</html>