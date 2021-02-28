<?php
    $con = new mysqli("localhost", "root", null, "classicmodels");
    if ($con->connect_error) die($con->connect_error);
    
    $sql = 'SELECT `customerName`, `creditLimit` as `cred` FROM customers LIMIT 30';
    $qresult = $con->query($sql);
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table td {
            padding: 2px;
        }

        table td, table th {
            border: 1px solid black;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Credit Limit</th>
        </tr>
        <?php
            if ($qresult->num_rows > 0) {
                while ($res = $qresult->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $res["customerName"] ?></td>
                        <td><?= $res["cred"] ?></td>
                    </tr>
                    <?php
                }
            } else echo "Geen DATA";
        ?>
    </table>
    <?php
        $qresult->close();
    ?>
</body>
</html>