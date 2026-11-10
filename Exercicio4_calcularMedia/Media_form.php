<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Calculador de Média Fatec </title>

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
            <img src="Images/php_logo.jpg" alt="php_image">
            <h1>Calculador de Médias: </h1>
        </header>

        <section>
            <form action="validar.php" method="post">
            <h2> Desenv Web II: </h2>
            <div>
                <label for="notaP1">Nota: </label>
                <!-- Step any permite que coloque números float no navegador -->
                <input type="number" size="20" id="notaP1" name="notaP1" step="any" required>
            </div>
            <div>
                <label for="notaP2">Nota: </label>
                <input type="number" size="20" id="notaP2" name="notaP2" step="any" required>
            </div>
            <button> Enviar </button>
            </form>
        </section>
    </body>
</html>