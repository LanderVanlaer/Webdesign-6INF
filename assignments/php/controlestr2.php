<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>De dagen van de week:</h1>
    <hr>
    <?php
        $dagen = array(1 => "maandag", 2 => "dinsdag", 3 => "woensdag", 4 => "donderdag", 5 => "vrijdag", 6 => "zaterdag", 7 => "zondag");
        foreach ($dagen as $i => $dag) {
            echo "dag $i van de week is $dag.<br>";
        }
    ?>
</body>
</html>