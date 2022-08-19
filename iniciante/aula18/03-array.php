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
            <table border="1">
                <tr>
                    <?php
                        $c = range(5, 20, 2);
                        foreach($c as $valor){
                            echo "<td>$valor ";
                        }
                    ?>
                </tr>
            </table>
        </pre>
    </div>
</body>

</html>