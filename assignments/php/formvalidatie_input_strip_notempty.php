<?php
    function printErrors(...$errs) {
        foreach ($errs as $e)
            if (!empty($e))
                echo "$e<br>";
    }

    function test_var($var) {
        return trim(stripslashes(htmlspecialchars($var)));
    }

    $naam = $email = $geslacht = $commentaar = $website = "";
    $naam = test_var($_POST["naam"]);
    $email = test_var($_POST["mail"]);
    $geslacht = test_var($_POST["geslacht"]);
    $commentaar = test_var($_POST["comment"]);
    $website = test_var($_POST["website"]);

    $naamFout = $emailFout = $geslachtFout = $fout = "";
    if (!empty($_POST)) {
        if (empty($naam)) {
            $naamFout = "Naam is verplicht";
            $fout = true;
        }
        if (empty($email)) {
            $emailFout = "E-mail is verplicht";
            $fout = true;
        }
        if (empty($geslacht)) {
            $geslachtFout = "Geslacht is verplicht";
            $fout = true;
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
        table tr td[colspan="2"] {
            text-align: right;
        }

        .red {
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>PHP Formulier - Validatievoorbeeld</legend>
            <h3 class="red">* verplicht veld.</h3>
            <table>
                <tr>
                    <td><label for="naam">* Naam:</label></td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td><label for="mail">* E-mail:</label></td>
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
                    <td>* Geslacht:</td>
                    <td>
                        <label>Vrouw <input value="vrouw" name="geslacht" type="radio" id="vrouw"></label>
                        <label>Man <input value="man" name="geslacht" type="radio" id="man"></label>
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
            if (!empty($fout)) {
                echo "<h1 class='red'>Gelieve rekening te houden met volgende fouten:</h1>
                   <p class='red'>";
                printErrors($naamFout, $emailFout, $geslachtFout);
                echo "</p>";
            } else {
                echo "<h1>Je gaf de volgende gegevens in:</h1>
                   <p>
                      $naam<br>
                      $email<br>
                      $website<br>
                      <pre>$commentaar</pre>
                      $geslacht
                  </p>";
            }
        }
    ?>
</body>
</html>