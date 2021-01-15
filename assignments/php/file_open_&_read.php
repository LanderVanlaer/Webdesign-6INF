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
        $file = fopen("../../resources/read_file.txt", 'r') or die("Unable to open file");
        echo fread($file, filesize("../../resources/read_file.txt"));
        fclose($file);
        echo "<hr>" . filesize("../../resources/read_file.txt");
    ?>
</body>
</html>