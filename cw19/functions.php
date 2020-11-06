<?php
function getConnection(){
    $conn = new mysqli("localhost","root",null,"gdow_cw19");
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWycieczki(){
    $conn=getConnection();
    if($conn==null) return [];
    $sql = "SELECT * FROM wycieczki";
    $result = $conn->query($sql);
    $wycieczki = [];
    while($row = $result->fetch_row()){
        $wycieczki[] = $row;
    }
    $conn->close();
    return $wycieczki;
}
function wycieczkiToTable(array $dane){
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Miejsce wycieczki</th><th>Cena</th><th>Data</th></tr>\n";
    $lp=0;
    foreach($dane as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>\n";
    }
    return $html."</table>\n";
}