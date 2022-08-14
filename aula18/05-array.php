<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Arrays</title>
    <style>
        .foco {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <pre>
            <?php
                $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
                $v["fuma"] = true;
                //print_r($v);
                foreach($v as $k => $c) {
                    echo "O campo $k possui o conteúdo $c<br>";
                }
            ?>
        </pre>
    </div>
</body>

</html>