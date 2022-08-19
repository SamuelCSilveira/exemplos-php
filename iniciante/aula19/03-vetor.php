<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções de Vetores</title>
    <style>
        .foco {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            //array_unshift($v, "O"); // adiciona um valor ao início do vetor
            array_shift($v); // remove o primeiro valor do vetor
            print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>