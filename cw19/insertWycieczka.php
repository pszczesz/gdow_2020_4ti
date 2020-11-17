<?php
require "functions.php";
if(isset($_POST['miejsce'])){
    $miejsce = trim($_POST['miejsce']);
    $cena = floatval($_POST['cena']);
    $data = trim($_POST['data']);
    if($miejsce!='' && $cena>=0 && $data!=''){
        insertWycieczka($miejsce,$cena,$data);
        header("Location: wycieczkiAdmin.php");
    }else{
        header("Location: addNewWycieczka.php");
    }
}else{
    header("Location: addNewWycieczka.php");
}