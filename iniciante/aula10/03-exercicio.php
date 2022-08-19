<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Região do País</title>
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
            $est = isset($_POST["estado"])?$_POST["estado"]:0;
           
            switch($est){
                case 1:
                case 3:
                case 4:
                case 13:
                case 21:
                case 22:
                case 26:
                    echo "Você mora na <span class='foco'>Região Norte</span>";
                    break;
                case 2:
                case 5:
                case 6:
                case 9:
                case 14:
                case 16:
                case 17:
                case 19:
                case 25:
                    echo "Você mora na <span class='foco'>Região Nordeste</span>";
                    break;
                case 8:
                case 10:
                case 11:
                case 27:
                    echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
                    break;
                case 7:
                case 12:
                case 18:
                case 24:
                    echo "Você mora na <span class='foco'>Região Sudeste</span>";
                    break;
                case 15:
                case 20:
                case 23:
                    echo "Você mora na <span class='foco'>Região Sul</span>";
                    break;
                default:
                    echo "Estado inválido!";
            }
        ?>

        <br><br>
        <input type="submit" value="Voltar" onclick="window.location.href='03-exercicio.html'">
    </div>
</body>

</html>