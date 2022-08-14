<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis Referenciadas em PHP</title>
</head>

<body>
    <div>
        <?php
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "A variável A vale $a";
            echo "<br>A variável B vale $b";
        ?>
    </div>
</body>

</html>