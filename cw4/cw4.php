<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $napis = "Ala ma kota malego"; //A-l-a- -m-

        for($i=0;$i<strlen($napis);$i++){
            echo "{$napis[$i]}<br>\n";
        }
        $wyrazy = explode(' ',$napis);
        var_dump($wyrazy);
        echo '<br>';
        for($i=0;$i<strlen($napis);$i++){
            echo $napis[$i].'-';
        }
        echo '<br>';
        for($i=0;$i<count($wyrazy);$i++){ //petla po wyrazach
            for($j=0;$j<strlen($wyrazy[$i]);$j++){ //petla po literach w kazdym wyrazie
                if($j<strlen($wyrazy[$i])-1){
                    echo $wyrazy[$i][$j].'-';
                }else{
                    echo $wyrazy[$i][$j].' ';
                }
            }
        }
    ?>
</body>

</html>