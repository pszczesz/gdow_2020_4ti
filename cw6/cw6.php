<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
<<<<<<< HEAD
        $napis = "Żółta łódź podwodna";
        for($i=0;$i<strlen($napis);$i++){
            echo $napis[$i].' ';
        }
        $napis2 = "róż";
        echo "<br>długość tekstu: ".strlen($napis2)."<br>";
        echo "<br>długość tekstu: ".mb_strlen($napis2)."<br>";
        echo mb_substr($napis,0,1)."<br>";
        for($i=0;$i<mb_strlen($napis);$i++){
            echo mb_substr($napis,$i,1).' ';
        }
    ?>
    <h3>Funkcje w php</h3>
    <?php
        function Dodaj($a, $b){
            return $a + $b;
        }
        function Sklej($napis1,$napis2){
            return $napis1.' - '.$napis2;
        }
        function GenerList($ile,$typ){
            echo "<{$typ}l>\n";
            for($i=1;$i<=$ile;$i++){
                echo "<li>element listy: {$i}</li>\n";
            }            
            echo "</{$typ}l>\n";
        }
        $liczba1 = 12;
        $liczba2  = 45;
        $t1 = "ala"; $t2 = "robaczek";
        echo "<p>{$liczba1} + {$liczba2} = ".Dodaj($liczba1,$liczba2)."</p>\n";
        echo "<p>{$t1}  oraz {$t2} : ".Sklej($t1,$t2).'</p>';
        GenerList(5,'o');
        GenerList(10,'u');
=======

>>>>>>> e7d07e41b79c524fbf8f303a3b684846bd4d5866
    ?>
</body>
</html>