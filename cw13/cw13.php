<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze c.d.</title>
    <link rel="stylesheet" href="cw13.css">
</head>
<body>
    <form method="post">
        <div class="line">
            <label for="imie">Podaj imie</label>
            <input type="text" name="imie" id="imie">
        </div>
        <div class="line">
            <label for="nazwisko">Podaj nazwisko</label>
            <input type="text" name="nazwisko" id="nazwisko">
        </div>
        <div class="line">
            <label for="klasa">Wybierz klasę</label>
            <select name="klasa" id="klasa">
                <option value="1A">1A</option>
                <option value="1B">1B</option>
                <option value="1C">1C</option>
            </select>
        </div>
        <div class="line">
            <label for="">Wybierz płeć</label><br>
             <input type="radio" name="plec" checked=''>Kobieta <br>
             <input type="radio" name="plec">Mężczyzna <br>
        </div>
        <div class="line"><label for="">Wybierz zainteresowania: </label><br>
            <input type="checkbox" name="zaint[]" >Muzyka<br>
            <input type="checkbox" name="zaint[]" >Film<br>
            <input type="checkbox" name="zaint[]" >Sport<br>
            <input type="checkbox" name="zaint[]" >Książki<br>
        </div>
        <input type="submit" value="Zapisz">
    </form>
    <div class="wynik">
        <?php
        
        ?>
    </div>
</body>
</html>