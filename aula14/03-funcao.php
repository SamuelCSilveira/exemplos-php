<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Função Soma</title>
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
            function soma() {
                $p = func_get_args();
                $tot = func_num_args();
                $s = 0;
                for ($i=0;$i<$tot;$i++){
                    $s += $p[$i];
                }
                return $s;
            }

            $r = soma(3, 5, 2, 8, 9, 4);
            echo "A soma dos valores é $r";
        ?>
    </div>
</body>

</html>