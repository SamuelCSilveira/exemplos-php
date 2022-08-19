<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Matrizes</title>
    <style>
        .foco {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <pre>
            <?php
                $n = array( array(6,4),
                            array(4,9),
                            array(3,2));
                $n[0][1] = $n[2][0];
                print_r($n);
            ?>
        </pre>
    </div>
</body>

</html>