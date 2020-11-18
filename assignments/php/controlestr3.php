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
    <h1>Aankoop - verkoop</h1>
    <hr>
    <?php
        /**
         * Print de aankoopwaarde, verkoopwaarde en uitleg over de winst
         * met een `<hr>` achter de content
         *
         * @param $verkoop double De totale prijs van verkoop
         * @param $aankoop double De totale prijs van aankoop
         */
        function showAankoopVerkoop($verkoop, $aankoop) {
            echo
            "<p>
                De aankopwaarde = $aankoop <br>
                De verkoopwaarde = $verkoop <br>
            </p>";

            $winst = $verkoop - $aankoop;
            if ($winst <= 0)
                echo "Opgelet: er is geen winst, de aankoopwaarde ligt hoger dan de verkoopwaarde<hr>";
            elseif ($winst <= 100)
                echo "De winst ligt lager dan, of is gelijk aan 100<hr>";
            elseif ($winst < 200)
                echo "De winst ligt tussen 100 en 200<hr>";
            else
                echo "De winst ligt hoger dan, of is gelijk aan 200<hr>";
        }

        showAankoopVerkoop(20, 40);
        showAankoopVerkoop(100, 40);
        showAankoopVerkoop(150, 40);
        showAankoopVerkoop(240, 40);
    ?>
</body>
</html>