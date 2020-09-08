<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wybor = true;
        if($wybor){
            echo "<p style='color:green;'>Wybrano prawdę!!<img class='ob' src='prawda.png'></p>";
        }else{
            echo "<p style='color:red;'>Wybrano fałsz!!</p>";
        }
        $wiek = 18;
        if($wiek<18){
            echo "<p>Osoba niepełnoletnia</p>";
        }elseif($wiek==18){
            echo "<p>Osoba ma 18 lat</p>";
        }else{
            echo "<p>Osoba pełnoletnia</p>";
        }
    ?>
</body>
</html>