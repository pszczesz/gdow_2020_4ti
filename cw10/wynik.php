<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['imie'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $dataRejestracji = $_POST['dataRejestracji'];
        if(trim($imie)!="" && trim($nazwisko)!="" && trim($dataRejestracji!="")){
            $zawod = $_POST['zawod'];
            echo "<p>Witaj {$imie} {$nazwisko} zawód: {$zawod} "
                ."zarejestrowano: {$dataRejestracji}</p>\n";
        }else{
            echo "<p>Dane nie są poprawne. <a href='cw10.php'>Wróć do formularza</a></p>";
        }
       
   }

?>
</body>
</html>