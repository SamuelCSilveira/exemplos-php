<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Função Externa</title>
    <style>
        .foco {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <?php
            require "funcoes.php";
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando Programa...</h2>";
        ?>
    </div>
</body>

</html>