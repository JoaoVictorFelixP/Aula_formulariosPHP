<?php
    $usuario = htmlspecialchars($_POST["usuario"]);
    $senha = htmlspecialchars($_POST["senha"]);

    if ($usuario == "fatec" && $senha == "batata1234") {
        $mensagem = "<h2 class='sucesso'> Bem vindo(a) ao Site! </html>";
    } else {
        $mensagem = "<h2 class='erro'> USUÁRIO OU SENHA INCORRETOS!!</h2>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login do Site </title>
        <?= $mensagem ?>

        <style>
            .erro {
                color: red;
            }

            .sucesso {
                color: green;
            }
        </style>
    </head>
    <body>
        <h1>Login no Site</h1>
    </body>
</html>