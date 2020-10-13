<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['tekst'])){
        $tekst = $_POST['tekst'];
        $data = $_POST['data'];
        var_dump($tekst);
        $f = fopen("zapiski.txt","a");
        if($f){
            fwrite($f,$tekst.PHP_EOL);
            fwrite($f,"dopisano w dniu: ".$data);
            fwrite($f,PHP_EOL."==================================================".PHP_EOL);
            fclose($f);
        }
    }
    ?>
</body>
</html>