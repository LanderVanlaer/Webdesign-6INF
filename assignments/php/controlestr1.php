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
    <?php
        $tafel = is_numeric($_GET["tafel"]) ? doubleval($_GET["tafel"]) : 4;

        echo "<h1>De tafel van $tafel</h1><hr>";
        for ($i = 1; $i <= 10; $i++)
            echo "$i x $tafel = " . ($i * $tafel) . "<br>";

        $_GET["one"] = 6;
    ?>
    <button>Andere tafel</button>
    <script>
        document.querySelector("button").addEventListener("click", () => {
            const tafel = Number(prompt("Geef een andere tafel", 10));
            if (tafel) {
                const url = new URL(location.href);
                url.searchParams.set("tafel", tafel);
                location.href = url.href;
            } else
                alert("Gelieve een nummer in te vullen");
        });
    </script>
</body>
</html>