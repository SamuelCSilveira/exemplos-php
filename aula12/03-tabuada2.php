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
            $v = isset($_POST["val"]) ? $_POST["val"] : 1;
            echo "<h2>Mostrando a Tabuada de $v</h2><br>";
            $c = 1;
            
            do {
                $tab = $v * $c;
                echo "$v x $c = $tab<br>";
                $c++;
            }
            while ($c <= 10);
        ?><br>
        <p><input type="submit" value="Voltar" onclick="window.location.href='03-tabuada1.php'"></p>
    </div>
</body>

</html>