<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Formulier met POST:</legend>
            <h1>Vul volgende gegevens in</h1>
            <label>
                Voornaam:<br>
                <input type="text" name="voornaam">
            </label>
            <label>
                Achternaam:<br>
                <input type="text" name="achternaam">
            </label>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
    <?php
        if (!empty($_POST)) {
            echo "Hallo {$_POST["voornaam"]} {$_POST["achternaam"]}";
        }
    ?>
</body>
</html>