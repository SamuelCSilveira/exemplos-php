<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>substr_count (Strings)</title>
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
            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP");
            echo "$frase<br>PHP encontrado $cont vezes";
        ?>
    </div>
</body>

</html>