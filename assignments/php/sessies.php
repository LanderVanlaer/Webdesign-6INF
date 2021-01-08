<?php
    session_start();
    
    function test_var($var) {
        return trim(stripslashes(htmlspecialchars($var)));
    }
    
    $naam = -1;
    if (!empty($_POST)) {
        $naam = test_var($_POST["naam"]);
        
        if (!empty($naam)) {
            $_SESSION["naam"] = $naam;
        }
    }
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Login met een SESSIE</legend>
            <p class="red">* Verplichte velden</p>
            <h2>Welkom op deze website</h2>
            <label>
                Geef je naam
                <input type="text" name="naam" id="naam"><span class="red">* <?php if ($naam != -1 && empty($naam)) echo "Gelieve een naam in te geven" ?></span>
            </label>
            <br>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
    Ga naar <a href="sessies2.php">sessies2.php</a>.
</body>
</html>