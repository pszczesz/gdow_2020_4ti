<?php
var_dump($_POST);
if(isset($_POST['id'])){
    $id = intval($_POST['id']);
    $miejsce = trim($_POST['miejsce']);
    $cena = floatval($_POST['cena']);
    $data = trim($_POST['data']);
    if(!empty($miejsce) && !empty($data)){
        //zapis do bazy!!!!
    }
}else{
    header("Location: wycieczkiAdmin.php");
}