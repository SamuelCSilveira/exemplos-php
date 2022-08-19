<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Raiz quadrada em HTML/PHP</title>
</head>

<body>
    <div>
        <?php
            $valor = $_POST["v"];
            $rq = sqrt($valor);
            echo "A raiz quadrada de $valor é igual a ". number_format($rq, 2);
        ?>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>

</html>