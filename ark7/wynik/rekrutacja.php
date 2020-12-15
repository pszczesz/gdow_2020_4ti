<?php

if(isset($_POST['imie'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stanowisko = $_POST['stanowisko'];
    echo "Dodano dane rekrutacyjne do bazy";
    $conn = new mysqli("localhost","root",null,"gdow_ark7");
    $conn->query("SET NAMES ut8");
    $sql = "INSERT INTO pracownicy(imie,nazwisko,stanowisko) VALUES('{$imie}','$nazwisko',{$stanowisko})";
    $result = $conn->query($sql);
    $conn->close();
}