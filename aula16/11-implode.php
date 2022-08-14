<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>implode (Strings)</title>
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
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";

            $texto = implode("#", $vetor); // join() - mesma função
            print($texto);
        ?>
    </div>
</body>

</html>