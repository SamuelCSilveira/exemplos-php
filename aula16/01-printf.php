<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>printf (Strings)</title>
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
            $p = "Leite";
            $pr = 4.5;
            //echo "O $p custa R$ $pr<br>";
            printf("O %s custa R$ %.2f", $p, $pr);
        ?>
    </div>
</body>

</html>