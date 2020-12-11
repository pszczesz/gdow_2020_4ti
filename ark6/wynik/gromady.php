<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <section id="gorny">
        <section id="menu">
            <a href="groada-ryby.html">gromada ryb</a>
            <a href="gromada-ptaki.html">gromada ptaków</a>            
            <a href="gromada-ssaki.html">gromada ssaków</a>
        </section>
        <section id="logo">
            <h2>GROMADY KRĘGOWCÓW</h2>
        </section>
    </section>
    <section id="glowny">
        <section id="lewy">
            <?php  
            $conn = new mysqli("localhost","root",null,"gdow_ark6");
            $conn->query("SET NAMES utf8");
            $sql1 = "SELECT id,Gromady_id,gatunek,wystepowanie FROM zwierzeta WHERE Gromady_id=4 or Gromady_id=5 ";
            $result = $conn->query($sql1);
            while($row=$result->fetch_row()){
                echo "<p>{$row[0]}. {$row[2]}</p>";
                $gromada = ($row[1]==4) ? "ptaki":"ssaki";
                echo "<p>Występowanie: {$row[3]}, gromada {$gromada}</p>";
                echo "<hr>";
            }
             ?>
        </section>
        <section id="prawy">
            <h1>PTAKI</h1>
            <ol>
                <?php

                ?>
            </ol>
            <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
        </section>
    </section>
    <section id="stopka">Stronę o kręgowcach przygotował: XXXXXXXX</section>
</body>
</html>