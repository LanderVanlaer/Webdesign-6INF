<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $target_dir = "../../resources/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = true;
        $image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    ?>
</body>
</html>