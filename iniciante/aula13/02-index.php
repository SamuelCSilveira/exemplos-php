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
        <form action="02-tabuada.php" method="post">
            Número: 
            <select name="val">
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>