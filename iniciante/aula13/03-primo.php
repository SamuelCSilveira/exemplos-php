<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Número Primo</title>
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
            $n = isset($_POST["num"]) ? $_POST["num"] : 1;
            $multiplos = 0;
            
            echo "<h2>Analisando o número $n...</h2><br>";
            echo "<h3>Valores múltiplos: ";
            
            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    echo "$i ";
                    $multiplos++;
                }
            }
            
            echo "</h3><br><h3>Total de múltiplos: $multiplos</h3><br>";
            
            if ($multiplos <= 2) {
                echo "<h2>Resultado: $n <span class='foco'>É PRIMO!</span></h2>";
            }
            else {
                echo "<h2>Resultado: $n <span class='foco'>NÃO É PRIMO!</span></h2>";
            }
        ?>
        <p><input type="submit" value="Voltar" onclick="window.location.href='03-primo.html'"></p>
    </div>
</body>

</html>