<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Tabuada</title>
    <style>
        .foco {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <form action="03-tabuada2.php" method="post">
            Número: 
            <select name="val">
                <?php
                    $c = 1;

                    while ($c <= 10) {
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>