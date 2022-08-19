<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
        $txt = isset($_POST["t"])?$_POST["t"]:"Texto Genérico";
        $tam = isset($_POST["tam"])?$_POST["tam"]:"12pt";
        $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Cores em HTML/PHP</title>
</head>

<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <a href="03-exercicio.html">Voltar</a>
    </div>
</body>

</html>