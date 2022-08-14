<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Contador Personalizável</title>
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
            $i = isset($_POST["inicio"]) ? $_POST["inicio"] : 0;
            $f = isset($_POST["final"]) ? $_POST["final"] : 0;
            $c = isset($_POST["incremento"]) ? $_POST["incremento"] : 0;

            if ($i <= $f) {
                while ($i <= $f) {
                    echo $i . " ";
                    $i += $c;
                }
            }
            else {
                while ($i >= $f) {
                    echo $i . " ";
                    $i -= $c;
                }
            }
        ?>
    </div>
</body>

</html>