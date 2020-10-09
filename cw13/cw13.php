<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze c.d.</title>
    <link rel="stylesheet" href="cw13.css">
</head>
<body>
    <div class="form">
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
             <input type="radio" name="plec" checked='' value='Kobieta'>Kobieta <br>
             <input type="radio" name="plec" value='Mężczyzna'>Mężczyzna <br>
        </div>
        <div class="line"><label for="">Wybierz zainteresowania: </label><br>
            <input type="checkbox" name="zaint[]" value='Muzyka'>Muzyka<br>
            <input type="checkbox" name="zaint[]" value='Film'>Film<br>
            <input type="checkbox" name="zaint[]" value='Sport'>Sport<br>
            <input type="checkbox" name="zaint[]" value='Książki'>Książki<br>
        </div>
        <input type="submit" value="Zapisz">
    </form>
    </div>
    <?php
    if(isset($_POST['imie'])){
       // var_dump($_POST);
         echo '<div class="wynik">';
         $imie = trim($_POST['imie']);   
         $nazwisko = trim($_POST['nazwisko']);   
         $klasa = $_POST['klasa'];
        $plec = $_POST['plec'];
        if(isset($_POST['zaint'])){
            $zaint = $_POST['zaint'];
            $htmlZaint = "<ul>";
            foreach($zaint as $z){
                $htmlZaint .= "<li>{$z}</li>\n";
            }
            $htmlZaint .= "</ul>\n";
        }
        echo "<p>Zarejestrowano nowego kandydata: {$imie} {$nazwisko}</p>\n";
        echo "<p>Płeć: {$plec} do klasy: {$klasa}</p>";
        echo isset($htmlZaint)? "Zainteresowania:<br>".$htmlZaint : "";
         echo '</div> ';
    }
   
    ?>
    <script>
        window.onload = function() {
    document.querySelector(".form").className += " loaded";
}
    </script>
</body>
</html>