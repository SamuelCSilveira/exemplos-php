<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada</title>
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
            $n = isset($_POST["val"]) ? $_POST["val"] : 1;

            for ($i = 1; $i <= 10; $i++) {
                $r = $n * $i;
                echo "$n x $i = $r<br>";
            }
        ?>
        <p><input type="submit" value="Voltar" onclick="window.location.href='02-index.php'"></p>
    </div>
</body>

</html>