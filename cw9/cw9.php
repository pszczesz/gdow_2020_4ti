<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="wynik.php" method="get">
        <div>
            <label for="imie">Podaj imię</label>
            <input type="text" name="imie" id="imie">
        </div>
        <div>
            <label for="nazwisko">Podaj nazwisko</label>
            <input type="text" name="nazwisko" id="nazwisko">
        </div>
        <div>
            <label for="dataRejestracji">Podaj datę</label>
            <input type="date" name="dataRejestracji" id="dataRejestracji">
        </div>
        <div>
        <input type="submit" value="Zapisz">
        </div>
    </form>
    <?php

    ?>
</body>
</html>