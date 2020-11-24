<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw20.css">
</head>
<body>
<div>
<?php
   // var_dump($_POST);
   // var_dump($_FILES);
    if(isset($_POST['submit'])){
        $resultDir = __DIR__."/uploads/"; //tu moze byc ERROR
       // var_dump($resultDir);
       $resultFile = $resultDir.basename($_FILES['plikDoZapisu']['name']);
       
       $uploadOK = true;
       $imgFileType = strtolower(pathinfo($resultFile,PATHINFO_EXTENSION));
      // var_dump($imgFileType);
        $check = getimagesize($_FILES['plikDoZapisu']['tmp_name']);
      //  var_dump($check);
      if($check!==false){
          echo "<div>Plik jest obrazkiem ".$check['mime']."</div>";
          $uploadOK = true;
      }else{
        echo "<div>Plik nie jest obrazkiem </div>";
        $uploadOK = false;
      }
      if(file_exists($resultFile)){
        echo "<div>Taki plik już istnieje</div>";
        $uploadOK = false;
      }
      if($_FILES['plikDoZapisu']['size']>1000000){
        echo "<div>Taki plik jest zbyt duży (powyżej 1MB)</div>";
        $uploadOK = false;
      }
      if($imgFileType != "jpg" && $imgFileType != "jpeg" && $imgFileType !="png" && $imgFileType!="gif"){
        echo "<div>Taki plik nie jest typu: jpeg jpg png gif</div>";
        $uploadOK = false;
      }
      if($uploadOK==false){
        echo "<div style='color:red'>Niestety nie można pobrać pliku</div>";
      }else{
        move_uploaded_file($_FILES['plikDoZapisu']['tmp_name'],$resultFile);
        echo "<div style='color:green'>Plik: ".htmlspecialchars(basename($_FILES['plikDoZapisu']['name']))." został załadowany</div>";
      }
    }else{
      echo "<div style='color:red'>Niestety pojawiły się błędy przy próbie zapisu pliku!!!!!</div>";
    }


    ?>
</div>
<div>
    <?php
    $obrazki = scandir($resultDir);
    var_dump($obrazki);
    foreach($obrazki as $img){
      if($img!="." || $img!=".."){
        echo "<img src='uploads/{$img}' alt='{$img}'>\n";
      }
    }

  ?>
</div>
   
</body>
</html>