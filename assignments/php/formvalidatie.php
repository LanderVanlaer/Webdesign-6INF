<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table tr td[colspan="2"] {
            text-align: right;
        }
    </style>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>PHP Formulier - Validatievoorbeeld</legend>
            <table>
                <tr>
                    <td><label for="naam">Naam:</label></td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td><label for="mail">E-mail:</label></td>
                    <td><input type="email" name="mail" id="mail"></td>
                </tr>
                <tr>
                    <td><label for="website">Website:</label></td>
                    <td><input type="url" name="website" id="website"></td>
                </tr>
                <tr>
                    <td><label for="comment">Comment:</label></td>
                    <td><textarea name="comment" id="comment" cols="22" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Geslacht:</td>
                    <td>
                        <label>Vrouw <input value="vrouw" name="geslacht" type="radio" id="vrouw"></label>
                        <label>Man <input value="man" name="geslacht" type="radio" id="man" required></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Verzend</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
        if (!empty($_POST)) {
            $naam = $email = $geslacht = $commentaar = $website = "";
            $naam = $_POST["naam"];
            $email = $_POST["mail"];
            $geslacht = $_POST["geslacht"];
            $commentaar = $_POST["comment"];
            $website = $_POST["website"];
            echo "<h1>Je gaf de volgende gegevens in:</h1>
                   <p>
                      $naam<br>
                      $email<br>
                      $website<br>
                      <pre>$commentaar</pre>
                      $geslacht
                  </p>";
        }
    ?>
</body>
</html>