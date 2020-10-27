<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodawanie studenta</title>
</head>
<body>
    <?php
    require "functions.php";
    //var_dump($_POST);
    //var_dump($_SERVER);
    if(isset($_POST['imie'])){
        $imie = trim($_POST['imie']);
        $nazwisko = trim($_POST['nazwisko']);
        $grupa = trim($_POST['grupa']);
        $wiek = intval($_POST['wiek']);
        if($imie!='' && $nazwisko!='' && $wiek>0){
            saveToStudents($imie,$nazwisko,$grupa,$wiek);
        }
        
    }
    ?>
    <div><a href="cw18.php">Powrót do listy studentów</a></div>
</body>
</html>