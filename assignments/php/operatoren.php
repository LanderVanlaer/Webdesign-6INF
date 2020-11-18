<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        $a = "abcdefghijklm";
        $b = "nopqrstuvwxyz";

        $c = 2;

        echo $a . $b;
        echo '<br>';
        echo $c++;
        echo '<br>';
        echo ++$c;
        echo '<br>';

        $naam = "Lander Van laer";

        echo "Hallo $naam<br>";
        echo 'Hallo $naam';
    ?>
</body> 

</html>