<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Permissão para votar e dirigir</title>
</head>

<body>
    <div>
        <?php
            $ano = isset($_POST["ano"])?$_POST["ano"]:1900;
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e terá $idade anos.<br>";

            if($idade >= 18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }

            else{
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "Com essa idade você $v e também $d.";
        ?>

        <br>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>

</html>