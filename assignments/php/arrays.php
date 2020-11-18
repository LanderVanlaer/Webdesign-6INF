<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <h1>Geïndiceerde arrays</h1>
    <h2>Dit is met een 'foreach'</h2>
    <?php
        $reeks = array("Mercedez-Benz", "BMW", "Audi");
        $reeks[] = "Jaguar";

        foreach ($reeks as $key => $value)
            echo "De waarde binnen de array \"\$reeks\" op index $key is: $value <br>";
    ?>
    <h2>Dit is met een 'for'</h2>
    <?php
        for ($i = 0; $i < count($reeks); $i++)
            echo "De waarde binnen de array \"\$reeks\" op index $i is: $reeks[$i] <br>";
    ?>
    <h2>Associatieve arrays</h2>
    <?php
        $spaans = array("hand" => "mano", "been" => "pierna", "arm" => "brazo");
        $spaans["voet"] = "pie";

        foreach ($spaans as $nederlands_value => $spaans_value) {
            echo "De waarde binnen de array \"\$spaans\" : $nederlands_value = $spaans_value<br>";
        }
    ?>
</body>
</html>