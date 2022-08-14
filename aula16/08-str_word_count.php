<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>str_word_count (Strings)</title>
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
            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 0);
    
            print($cont); // 0 = valor inteiro
            //print_r($cont); // 1 = array | 2 = array com índice
        ?>
    </div>
</body>

</html>