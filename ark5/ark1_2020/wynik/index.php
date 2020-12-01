<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl8.css">
    <title>Nasz sklep komputerowy</title>
</head>
<body>
   <div id="gora">
       <div id="menu">
           <a href="index.php">Główna</a>
           <a href="procesory.html">Procesory</a>
           <a href="ram.html">RAM</a>
           <a href="grafika.html">Grafika</a>
       </div>
       <div id="logo">
           <h2>Podzespoły komputerowe</h2>
       </div>
   </div> 
   <div id="glowny">
       <h1>Dzisiejsze promocje</h1>
       <table>
           <tr>
               <th>NUMER</th>
               <th>NAZWA PODZESPOŁU</th>
               <th>OPIS</th>
               <th>CENA</th>
           </tr>
           <?php
            $conn = new mysqli("localhost","root",null,"gdow_sklep_2020");
            if($conn->connect_errno!=0) die("ERROR");
            $conn->query("SET NAMES utf8");
            $sql = "SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena<1000";
            $result = $conn->query($sql);
            while($row = $result->fetch_row()){
                echo "<tr>\n";
                echo "<td>{$row[0]}</td>";
                echo "<td>{$row[1]}</td>";
                echo "<td>{$row[2]}</td>";
                echo "<td class='rightm'>{$row[3]}</td>";
                echo "</tr>\n";
            }
            $conn->close();
           ?>
       </table>
   </div>
   <div id="stopka">
       <div>
           <img src="scalak.jpg" alt="promocja na procesory">
       </div>
       <div>
           <h4>Nasz Sklep Komputerowy</h4>
           <p>Współpracujemy z hurtownią <a href="http://www.edata.pl">edata</a></p>
       </div>
       <div>
           <p>zadzwoń: 601 602 603</p>
       </div>
       <div>
           <p>Stronę wykonał: 34223455654</p>
       </div>
   </div>
</body>
</html>