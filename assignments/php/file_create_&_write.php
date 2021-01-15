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
        $file = fopen("../../resources/create_write.txt", "w+");
        $txt = "Jan Peeters \n";
        fwrite($file, $txt);
        fwrite($file, $txt);
        fclose($file);
    ?>
    test
</body>
</html>