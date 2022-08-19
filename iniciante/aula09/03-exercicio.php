<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Cálculo de Média</title>
    <style>
        span {
            color:brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <?php
            $nota1 = isset($_POST["nota1"])?number_format($_POST["nota1"],1):number_format(0,1);
            $nota2 = isset($_POST["nota2"])?number_format($_POST["nota2"],1):number_format(0,1);
            $media = number_format(($nota1 + $nota2) / 2, 1);
            echo "A média entre <span>$nota1</span> e <span>$nota2</span> é igual a <span>$media</span>.<br>";

            if($media < 5){
                $situacao = "<span>REPROVADO</span>";
            }

            elseif($media < 7){
                $situacao = "<span>RECUPERAÇÃO</span>";
            }
                
            else{
                $situacao = "<span>APROVADO</span>";
            }

            echo "Situação do aluno: $situacao";
        ?>

        <br><br>
        <input type="submit" value="Voltar" onclick="window.location.href='03-exercicio.html'">
    </div>
</body>

</html>