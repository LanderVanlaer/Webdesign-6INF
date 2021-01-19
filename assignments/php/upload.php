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
        print_r($_FILES);

        if (!empty($_FILES)) {
            $target_dir = "../../resources/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = !empty($_POST);
            $image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            //        if (!empty($_POST)) {
            //            $check = getimagesize($_FILES["file"]["tmp_name"])
            //        }
            echo $_FILES["file"]["tmp_name"];

            if ($uploadOk) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "Het bestand " . basename($_FILES["file"]["name"]) . " werd opgeladen in volgende map: $target_dir<br>";
                } else {
                    echo "Er was een probleem bij het opladen van het bestand!.<br>";
                }
            } else {
                echo "Sorry uw bestand werd niet opgeladen";
            }
        } else {
            echo "<a href='upload.html'>upload.html</a>";
        }
    ?>
</body>
</html>