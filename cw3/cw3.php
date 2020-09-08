<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ćwiczenie 3 - typy w php</h1>
    <pre>
    <?php
    $a = 12;
    var_dump($a);
    $b = 45.89;
    var_dump($b);
    $c = 0x11;
    var_dump($c);
    $d = 0b11;
    var_dump($d);
    $dd = 011;
    var_dump($dd);
    $dd = "ala ma kota";
    var_dump($dd);
    $prawda = true;
    var_dump($prawda);
    $eee; //error
    var_dump($eee);
    ?>
    <h1>ćwiczenie 3 - operatory</h1>
    <?php
    // + - * /       =   ++  --  += -= 
    $a++;
    echo " (a++) a = {$a}<br>";
    $a += 10;
    echo " (a+=10) a = {$a}<br>";

    echo "<p> b = {$b}</p>\n";//uzycie " " 
    echo '<p> b = {$b}</p>\n';//uzycie  '  '

    ?>
    </pre>
</body>

</html>