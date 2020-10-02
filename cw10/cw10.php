<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" cw10.css">
</head>
<body>
<form action="wynik.php" method="post">
        <div>
            <label for="imie">Podaj imię: </label>
            <input type="text" name="imie" id="imie">
        </div>
        <div>
            <label for="nazwisko">Podaj nazwisko: </label>
            <input type="text" name="nazwisko" id="nazwisko">
        </div>
        <div>
            <label for="dataRejestracji">Podaj datę: </label>
            <input type="date" name="dataRejestracji" id="dataRejestracji">
        </div>
        <div><label>Wybierz zawód: </label>
            <select name="zawod" id=""> 
                <option value="kierowca">kierowca</option>
                <option value="monter">monter</option>
                <option value="magazynier">magazynier</option>
            </select>
        </div>
        <div>
        <input type="submit" value="Zapisz">
        </div>
    </form>
</body>
</html>