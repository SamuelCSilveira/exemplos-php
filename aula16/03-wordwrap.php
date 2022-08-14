<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>wordwrap (Strings)</title>
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
            $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
            $r = wordwrap($t, 5, "<br>\n", true);
            echo $r;
        ?>
    </div>
</body>

</html>