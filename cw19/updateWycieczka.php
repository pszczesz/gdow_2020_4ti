<?php
require "functions.php";
//var_dump($_POST);
if(isset($_POST['id'])){
    $id = intval($_POST['id']);
    $miejsce = trim($_POST['miejsce']);
    $cena = floatval($_POST['cena']);
    $data = trim($_POST['data']);
    if(!empty($miejsce) && !empty($data)){
        $result = updateWycieczka($id,$miejsce,$cena,$data);
        if($result){
            header("Location: wycieczkiAdmin.php");
        }else{
            header("Location: cw19.php");
        }
    }
}else{
    header("Location: wycieczkiAdmin.php");
}