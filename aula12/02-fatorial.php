<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Fatorial</title>
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
            $v = isset($_POST["val"]) ? $_POST["val"] : 1;
            echo "<h1>Calculando o fatorial de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            }
            while ($c >= 1);
            echo "<h2>$v! = $fat";

        ?><br>
        <p><input type="submit" value="Voltar" onclick="window.location.href='02-fatorial.html'"></p>
    </div>
</body>

</html>