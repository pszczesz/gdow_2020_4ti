<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{border-collapse: collapse; margin: 50px;}
    th{background-color: lightcoral;}
    th,td{border: solid black 1px;padding: 10px;}
    .right{text-align: right;}
    .bold{font-weight: bold;color: brown;}
    </style>
</head>
<body>
    <?php
    require "functions.php";
    $dane = getProducts();
    echo toTable($dane);
    ?>
</body>
</html>