<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>ucfirst (Strings)</title>
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
            $nome = "gustaVo guaNabara";
            echo "Seu nome é " . ucfirst($nome);
            //echo "Seu nome é " . ucfirst(strtolower($nome));
        ?>
    </div>
</body>

</html>