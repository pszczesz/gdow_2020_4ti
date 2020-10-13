<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na plikach w php</title>
</head>

<body>
    <h1>Operacje na plikach w php</h1>
    <?php
    $f = fopen("dane.txt", "r");
    //var_dump($f);
    if ($f) {
        while ($line = fgets($f)) {
            echo "<p>{$line}</p>";
        }
        if (feof($f)) {
            echo "<h3>Dotarliśmy do końca pliku</h3>";
        } else {
            echo "<h3>Coś poszło nie tak!!!!</h3>";
        }
        fclose($f);
    }
    $f = fopen("wynik.txt","w");
    $dane = ["ewrw w wr","wew weweqe q","ostatnia linijka"];
    if($f){
        foreach($dane as $line){
            fwrite($f,$line.PHP_EOL);
        }
        fclose($f);
    }

    ?>
</body>

</html>