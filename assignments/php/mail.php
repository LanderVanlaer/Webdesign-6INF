<?php
    function test_var($var) {
        return trim(stripslashes(htmlspecialchars($var)));
    }

    if (!empty($_POST)) {
        // zetten van SMTP-server in PHP-config
        ini_set("SMTP", "smtp.telenet.be");


        $naar = test_var($_POST['email']);
        $vraag = test_var($_POST['vraag']);


        if (filter_var($naar, FILTER_VALIDATE_EMAIL)) {
            //onderwerp
            $onderwerp = "Een vraag via de website";

            //message
            $message = "Verzonden op " . date("d-m-Y") . "-" . date("H:i") . "\n
            Naam {$_POST["voornaam"]}\n 
            Emailadres {$_POST["email"]}\n
            Nieuwsbrief\n";

            foreach ($_POST["soortVraag"] as $item)
                $message .= "$item\n";

            $message .= "Vraag: $vraag";

            //headers
            $header = "From: {$_POST["email"]}\r";

            //versturen
            mail($naar, $onderwerp, $message, $header);
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
            <legend>Contactformulier:</legend>
            <label>
                Voornaam:<span class="red">*</span><br>
                <input type="text" name="voornaam" id="voornaam" required>
            </label>
            <br>
            <label>
                Achternaam:<span class="red">*</span><br>
                <input type="text" name="achternaam" id="achternaam" required>
            </label>
            <br>
            <label>
                E-mail:<span class="red">*</span><br>
                <input type="email" name="email" id="email" required>
            </label>
            <br><br>
            Wil je onze nieuwsbrief ontvangen?<span class="red">*</span><br>
            <label> <input type="radio" name="nieuwsbrief" value="true" checked> Ja</label>
            <label> <input type="radio" name="nieuwsbrief" value="false"> Nee</label>
            <br><br>
            <label>
                Soort vraag:<span class="red">*</span><br>
                <select name="soortVraag[]" id="soortVraag" multiple required>
                    <option value="algemeen">algemeen</option>
                    <option value="hardware">hardware</option>
                    <option value="software">software</option>
                </select>
            </label>
            <br><br>
            <label>Vraag<br>
                <textarea name="vraag" id="vraag" cols="30" rows="10"></textarea>
            </label>
            <br><br>
            <button type="submit">Verzenden</button>
        </fieldset>
    </form>
</body>
</html>