<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        if (empty($_POST["voornaam"]) || empty($_POST["achternaam"])) {
            echo "
            <h3>U moet een voornaam en achternaam ingeven</h3>
            U word binnen 5 seconden terug gestuurd naar de form pagina.
            <script>setTimeout(()=>location.href = 'formpost.html', 5000)</script>";
        } else
            echo "Hallo {$_POST["voornaam"]} {$_POST["achternaam"]}<br>";
    ?>
    <br>
    <a href="formpost.html">Ga terug</a>
</body>
</html>