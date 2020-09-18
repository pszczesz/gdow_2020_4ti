<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    function Lista(array $dane, $typ='ol'){
        $html = "<{$typ}>\n";
        foreach($dane as $wiersz){
            $html .= "<li>{$wiersz}</li>\n";
        }
        $html .= "</{$typ}>\n";
        return $html;
    }
    echo "<p>Lista zakupów:</p>";
    echo Lista(["Sól","Mąka","Bułki","Kefir","Ziemniaki"]);
    echo Lista(["Tomasz","Monika","Beata","Franek","Grażyna"],'ul');
    ?>
</body>
</html>