<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Pętla for( ; ; ) {...}</h3>
    <?php
    for($i=1;$i<=6;$i++){
        echo "<h{$i}>Element nagłówka o numerze {$i}</h{$i}>\n";
    }
    ?>
    <h3>Pętla while( ) {...}</h3>
    <?php
        $suma = 0;
        $ile = 0;
        while($suma<100){
            $losowa = random_int(0,20);
            $ile++;
            echo $losowa.' ';
            $suma += $losowa;
        }
        echo "<br> suma liczb: {$suma} ilość liczb: {$ile} średnia: "
          .round($suma/$ile,2)."<br>\n";
    ?>
    <h3>Pętla do{...}while( )</h3>
    <?php
       $liczba=0;
       $ile =0;
       do{
        $liczba = random_int(0,30);
        if($liczba!=0) $ile++;
        echo $liczba.' ';        
       }while($liczba!=0);
       echo '<br> ilość liczb bez zera: '.$ile.'<br>';
    ?>
</body>
</html>