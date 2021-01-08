<?php
    session_start();
    
    if (isset($_POST["destroy"])) session_destroy();
    if (isset($_POST["unset"])) session_unset();
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ga naar <a href="sessies.php">sessies.php</a>.
    <br>
    <br>
    <form action="#" method="post">
        <button type="submit" name="unset">session_unset()</button>
        <button type="submit" name="destroy">session_destroy()</button>
    </form>
    <br><br>
    <?php
        print_r($_SESSION);
        echo "<br>" . session_id();
    ?>
</body>
</html>