<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Folgas</title>
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
            $d = isset($_POST["ds"])?$_POST["ds"]:0;
           
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                default:
                    echo "Dia da semana inválido!";
            }
        ?>

        <br><br>
        <input type="submit" value="Voltar" onclick="window.location.href='02-exercicio.html'">
    </div>
</body>

</html>