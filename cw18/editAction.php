<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require "functions.php";
    if(isset($_POST['imie'])){
        $id = intval($_POST['id']);
        $imie = trim($_POST['imie']);
        $nazwisko = trim($_POST['nazwisko']);
        $grupa = trim($_POST['grupa']);
        $wiek = intval($_POST['wiek']);
        $result = updateStudent($id,$imie,$nazwisko,$grupa,$wiek);
        var_dump($result);
        if($result){
            echo "update udany!!!!";
        }else{
            echo "ERROR!!!!";
        }
    }
?>
<div><a href="admin.php">Powrót do zarządzania studentami</a></div>
</body>
</html>

