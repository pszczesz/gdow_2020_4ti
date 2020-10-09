<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    const passw = "qaz";
    const log = "admin";
    if(isset($_POST['login'])){
        $login = trim($_POST['login']);
        $password = trim($_POST['haslo']);
        if(passw==$password && log==$login){
            echo "<h3>Zalogowano do systemu</h3>\n";
        }else{
            echo "<p style='color=red'>Błędny logi lub hasło</p>";
            echo "<div><a href='cw12.php'>Powrót do formularza</a></div>";
        }
    }else{
        echo "<div><a href='cw12.php'>Powrót do formularza</a></div>";
    }
    ?>
</body>
</html>