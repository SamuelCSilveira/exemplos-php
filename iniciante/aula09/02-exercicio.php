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

            if($idade < 16){
                $tipoVoto = "não vota";
            }

            elseif(($idade >= 16 && $idade < 18) || ($idade >= 65)){
                $tipoVoto = "voto opcional";
            }
                
            else{
                $tipoVoto = "voto obrigatório";
            }

            echo "Para essa idade, $tipoVoto.";
        ?>

        <br>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>

</html>