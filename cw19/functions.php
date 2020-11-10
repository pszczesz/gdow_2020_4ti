<?php
function getConnection()
{
    $conn = new mysqli("localhost", "root", null, "gdow_cw19");
    if ($conn->connect_errno != 0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWycieczki()
{
    $conn = getConnection();
    if ($conn == null) return [];
    $sql = "SELECT * FROM wycieczki";
    $result = $conn->query($sql);
    $wycieczki = [];
    while ($row = $result->fetch_row()) {
        $wycieczki[] = $row;
    }
    $conn->close();
    return $wycieczki;
}
function wycieczkiToTable(array $dane)
{
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Miejsce wycieczki</th><th>Cena</th><th>Data</th><th></th></tr>\n";
    $lp = 0;
    foreach ($dane as $row) {
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td><a class='btn1' href='zapisz.php?id={$row[0]}'>Zapisz na wycieczkę</a></td></tr>\n";
    }
    return $html . "</table>\n";
}
function getWycieczkaById($id)
{
    $conn = getConnection();
    if ($conn->connect_errno != 0) return [];
    $sql = "SELECT * FROM wycieczki WHERE id={$id}";
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_row();
}
function insertUczestnik($wycieczkaId,$imie,$nazwisko){
    $conn = getConnection();
    if($conn->connect_errno!=0) return false;
    $sql = "INSERT INTO uczestnicy(imie,nazwisko,wycieczkaId) "
      ." VALUES('{$imie}','{$nazwisko}',{$wycieczkaId})";
    //echo $sql;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
function getAllByWycieczka($wycieczkaId=-1){
    $conn = getConnection();
    if($conn->connect_errno!=0) return [];
    $wyb = $wycieczkaId!=-1 ? " WHERE wycieczkaId={$wycieczkaId}": "";
    if($wycieczkaId!=-1){
        $sql ="SELECT imie,nazwisko,miejsce,cena,data FROM uczestnicy INNER JOIN wycieczki "
            ." ON uczestnicy.wycieczkaId=wycieczki.id WHERE wycieczkaId={$wycieczkaId}";
    }else{
        $sql = "SELECT imie,nazwisko,miejsce,cena,data FROM uczestnicy INNER JOIN wycieczki "
                ." ON uczestnicy.wycieczkaId=wycieczki.id";
    }
   // echo $sql;
   $result = $conn->query($sql);
   $dane = [];
   while($row = $result->fetch_row()){
       $dane[] = $row;
   }
    $conn->close();
    return $dane;
}
function wycieczkiByUczestnikToTable(array $dane)
{
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Miejsce wycieczki</th><th>Cena</th><th>Data</th></tr>\n";
    $lp = 0;
    foreach ($dane as $row) {
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>\n";
    }
    return $html . "</table>\n";
}