<?php
function getConnection(){
    $conn = new mysqli("localhost","root",null,"gdow_cw1");
    if($conn->connect_errno!=0) return null;  
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAll(){
    $conn = getConnection();
    if($conn==null) die("Error!!!");
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    echo "<table>\n";
    $lp=0;
    echo "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Grupa</th><th>Wiek</th></tr>\n";
    while($row=$result->fetch_row()){
        echo "<tr><td>".(++$lp)."</td><td>{$row[1]}</td><td>{$row[2]}</td> "
           ." <td>{$row[3]}</td> <td>{$row[4]}</td> </tr>\n";
    }
    echo "</table>\n";

    $conn->close();
}