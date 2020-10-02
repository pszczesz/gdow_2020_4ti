<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $data = $_GET['dataRejestracji'];
    echo "<p>Dziękujemy za rejestrację: {$imie} {$nazwisko}  w dniu {$data}</p>"
    ?>
</body>
</html>