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
    $ageSum = 0;
    echo "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Grupa</th><th>Wiek</th></tr>\n";
    while($row=$result->fetch_row()){
        echo "<tr><td>".(++$lp)."</td><td>{$row[1]}</td><td>{$row[2]}</td> "
           ." <td>{$row[3]}</td> <td class='right'>{$row[4]}</td> </tr>\n";
        $ageSum += $row[4];
    }
    echo "<tr><td colspan='4' class='right'>Średni wiek</td><td class='right'>".
       round($ageSum/$lp,2)."</td></tr>";
    echo "</table>\n";
    echo "<div>Ilość studentów: {$lp}</div>";
    $conn->close();
}
function CountAll(){
    $conn = getConnection();
    if($conn==null) die("ERROR DB!!!");
    $sql = "SELECT count(*) from students";
    $result = $conn->query($sql);
    echo "<div>Ilość studentów: ".$result->fetch_row()[0]."</div>";
    $conn->close();
}

function saveToStudents($imie,$nazwisko,$grupa,$wiek){
    $conn = getConnection();
    if($conn==null) die("ERRROR!!!");
    $sql = "INSERT INTO students(firstName,lastName,division,age) "
       ." VALUES('{$imie}','{$nazwisko}','{$grupa}',{$wiek})";
    //echo $sql;
    $result = $conn->query($sql);
    $conn->close();
    var_dump($result);
    return $result;
}