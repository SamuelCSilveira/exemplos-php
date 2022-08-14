<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>str_replace (Strings)</title>
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
            $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
            $novaFrase = str_replace("Matemática", "PHP", $frase); // str_ireplace("matemática", "PHP", $frase)
            echo $novaFrase;
        ?>
    </div>
</body>

</html>