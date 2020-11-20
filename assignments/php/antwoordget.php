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
        function getCopy() {
            return "&copy; Lander Van laer";
        }

        if (empty($_GET["voornaam"]) || empty($_GET["achternaam"])) {
            echo "
            <h3>U moet een voornaam en achternaam ingeven</h3>
            U word binnen 5 seconden terug gestuurd naar de form pagina.
            <script>setTimeout(()=>location.href = 'formget.html', 5000)</script>";
        } else
            echo "Hallo {$_GET["voornaam"]} {$_GET["achternaam"]}<br>" . getCopy();
    ?>
    <br>
    <a href="formget.html">Ga terug</a>
</body>
</html>