<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Idade em HTML/PHP</title>
</head>

<body>
    <div>
        <?php
            $nome = isset($_POST["nome"])?$_POST["nome"]:"[não informado]";
            $ano = isset($_POST["ano"])?$_POST["ano"]:0;
            $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[sem sexo]";

            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>

</html>