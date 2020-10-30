<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw18.css">
</head>
<body>
    <?php
    require "functions.php";
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        echo "<div>Usuwanie studenta o id: {$id}</div>";
        $dane = getById($id);
       // var_dump($dane);
        echo "<div>Usuwanie studenta {$dane['firstName']} {$dane['lastName']} "
           ."z grupy {$dane['division']}</div>";
           ?>
        <form id="confirm"  method="post">
            <label >Czy potwierdzasz usunięcie studenta? </label>
            <input type="hidden" name="id" value="<?php echo $dane['id']; ?>">
            <input type="submit" value="TAK">
            <input type="reset" value="NIE">
        </form>

        <?php

    }else{
        echo "<div><a href='admin.php'>Powrót do zarządzania studentami</a></div>";
    }
    if(isset($_POST['id'])){
        //echo "Decyzja o usunięciu!!!!";
        $id = intval($_POST['id']);
        deleteById($id);
        echo "<div>Usunięto studenta <a href='admin.php'>Powrót do zarządzania</a></div>";
    }
    ?>
    <script>
        window.onload = function(){
            document.querySelector("#confirm").onreset = function(){
                location.href = "admin.php";
                return true;
            }
        }
    </script>
</body>
</html>