<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "functions.php";//dołącza plik i robi skrypt dalej
  //  include_once "functions.php";//dołacza jeśli nie było wcześniej
  //  require "functions.php";//dołącza i kończy gdy sie nie uda
  //  require_once "functions.php";//dołącza gdy nie było i kończy gdy sie nie uda
    $tab1 = [];//tworzenie tablicy
    $tab1[] = 234;  //wypelnianie tablicy...
    $tab1[] = 56;
    $tab1[] = 99;
    $tab1[] = 'ala';
    $tab1[] = [2,4,6,8,10];//tablica w tablicy
    var_dump($tab1);
    for($i=0;$i<count($tab1);$i++){
        if(is_array($tab1[$i])) print_r($tab1[$i]);
        else echo $tab1[$i].'<br>'; 
    }
    
    echo "<p>Lista zakupów:</p>";
    echo Lista(["Sól","Mąka","Bułki","Kefir","Ziemniaki"]);
    echo Lista(["Tomasz","Monika","Beata","Franek","Grażyna"],'ul');
    echo Colors(["biały","żółty","zielony","czerwony"]);
    ?>
</body>
</html>