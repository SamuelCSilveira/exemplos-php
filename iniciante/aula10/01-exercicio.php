<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações</title>
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
            $n = isset($_POST["num"])?$_POST["num"]:0;
            $o = isset($_POST["oper"])?$_POST["oper"]:1;

            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ** 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ 0.5;
            }

            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>"
        ?>

        <br><br>
        <input type="submit" value="Voltar" onclick="window.location.href='01-exercicio.html'">
    </div>
</body>

</html>