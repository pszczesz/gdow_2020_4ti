<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>Wynik obliczenia</title>
</head>
<body>
    <div class="container-fluid bg-alert">
    <?php
    //var_dump($_POST);
    function Potega($podstawa,$wykladnik){
        $wynik = 1;
        for($i=0;$i<$wykladnik;$i++){
            $wynik = $wynik * $podstawa;
        }
        return $wynik;
    }
    if(isset($_POST['a'])){
        $a = intval($_POST['a']);
        $b = intval($_POST['b']);
        $wybory = isset($_POST['wybor'])?$_POST['wybor']:[];
        if($a>0 && $b>0){
            echo $a ." <sup>{$b}</sup> = ".Potega($a,$b);
            if(count($wybory)>0)
            {
                foreach($wybory as $wyb){
                    echo "<p>wybrano: {$wyb}</p>";
                }
            }
        }else{
            echo "Błędne dane!!! <a class='btn btn-primary' href='cw11.php'>Powrót do formularza</a>";
        }
    }
    ?>
    </div>
</body>
</html>