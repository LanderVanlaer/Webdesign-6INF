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
    <?php
        define("KOERS", 40.3399);
        $belg_fr = 84613.29;
        $euro = $belg_fr / KOERS;

        echo "De Koers is: " . KOERS . "<br>
        DE waarde in Belgische Frank bedraagt: $belg_fr Fr.<br>
        Omgerekend naar Euro is dat dan: $euro Euro";
    ?>
</body>
</html>