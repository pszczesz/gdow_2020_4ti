<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przegląd notatek</title>
</head>
<body>
    <h1>Przegląd notatek</h1>
    <?php
    require "functions.php";
    $dane = getFromFile("zapiski.txt");
    echo toList($dane);
    ?>
</body>
</html>