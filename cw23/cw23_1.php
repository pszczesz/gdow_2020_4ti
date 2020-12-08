<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="cw23.css">
    <title>Document</title>
</head>
<body>
    <h1 class="badge-dark text-center p-3 m-4" style="font-variant: small-caps;">Kategorie</h1>
    <div class="d-flex flex-row justify-content-start m-4" >
        <div>
            
           <?php
            require_once "models/Repository.php";
            require_once "KategorieToHTML.php";
            require_once "GryToHTML.php";
            $repo = new Repository();
            $kategorie = $repo->getAllKategorie();
            echo "<h3>Lista kategorii</h3>";
            $katId = isset($_GET['id']) ? intval($_GET['id']) : -1;
            echo KategorieToHTML::katToList($kategorie, $katId);
           ?>
            <div>
        <a class="btn btn-dark btn-lg p-3 m-4" href="cw23.php">Powrót do listy gier</a>
        
    </div>     
            
        </div>
        <div class="w-50">
       
            <?php
            if(isset($_GET['id']) && $_GET['id']!=-1){
                $katId = intval($_GET['id']);
                $dane = $repo->getAllGryByKat($katId);
                $Kategoria = count($dane)>0 ? $dane[0]->getKategoria()->getNazwa() : "";
                echo " <h3>Lista gier z kategori {$Kategoria} </h3>";
               echo GryToHTML::GryToTableWithKat($dane);
            }
            ?>
        </div>
    </div>
   
</body>
</html>