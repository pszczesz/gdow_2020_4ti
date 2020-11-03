<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw18.css">
</head>
<body>
    <h1>Edytowanie studenta</h1>
    <?php
    require "functions.php";
    if(!isset($_GET['id'])){
        echo "<div>Brak klucza głównego</div>";
        echo "<div><a href='admin.php'>Powrót do zarządzania studentami</a></div>";
        die("ERROR");
    }else{
        $id = intval($_GET['id']);
        $row = getById($id);
        if(count($row)==0) die("ERRROR DB!!!");

    
    ?>
    <form action="editAction.php" method="post">
        <div class="line">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
            <label for="imie">Podaj imię: </label>
            <input type="text" name="imie" id="imie" value="<?php echo $row['firstName'];?>">
        </div>
        <div class="line">
            <label for="nazwisko">Podaj nazwisko: </label>
            <input type="text" name="nazwisko" id="nazwisko"  value="<?php echo $row['lastName'];?>">
        </div>
        <div class="line">
            <label for="grupa">Wybierz grupę: </label>
            <select name="grupa" id="grupa">
            <?php  
            echo showOptions($row['division']) ;
            ?>            
            </select>
        </div>
        <div class="line">
            <label for="wiek">Podaj wiek: </label>
            <input type="number" name="wiek" id="wiek"  value="<?php echo $row['age'];?>">
        </div>
        <input type="submit" value="Zapisz do bazy danych">
        <input type="reset" value="Wyczyść formularz">
    </form>
    <?php
    }
    ?>
</body>
</html>