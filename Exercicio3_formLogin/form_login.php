<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login formulário</title>

        <style>
            body {
                font: Arial;
            }

            header {
                margin: 2px;
            }

            header img {
                width: 80px;
                height: 80px;
            }

            form {
                width: 400px;
                border: 1px solid;
                border-radius: 6px;
                padding: 12px;
                text-align: center;
            }

            form div {
                margin: 6px;
            }

            form label {
                display: inline;
                width: 150px;
                text-align: right;
                margin-right: 12px;
            }
        </style>
    </head>
    <body>
        <header>
            <div>
                <img src="Images/php_logo.jpg" alt="php_logo" id="php_logo">
                <h1>Login do Site</h1>
            </div>
        </header>

        <section> 
            <!-- Method post impede que a senha apareça na barra de pesquisa -->
            <form action="validar.php" method="post">
            <div>
                <label for="usuario">Usuário: </label>
                <input type="text" size="20" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="senha">Senha: </label>
                <input type="password" size="20" id="senha" name="senha" required>
            </div>
            <div>
                <button> Entrar </button>
            </div>
            </form>
        </section>
    </body>
</html>