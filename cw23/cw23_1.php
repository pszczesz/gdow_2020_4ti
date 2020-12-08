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
    <div class="main p-3 m-4" >
        <div>
            <h3>Lista kategorii</h3>
           <?php
            require_once "models/Repository.php";
            require_once "KategorieToHTML.php";
            require_once "GryToHTML.php";
            $repo = new Repository();
            $kategorie = $repo->getAllKategorie();
            echo KategorieToHTML::katToList($kategorie);
           ?>
            <div class="float-none">
        <a class="btn btn-dark btn-lg p-3 m-4" href="cw23.php">Powrót do listy gier</a>
    </div>     
            
        </div>
        <div>
        <h3>Lista gier z kategori </h3>
            <?php
            if(isset($_GET['id']) && $_GET['id']!=-1){
                $katId = intval($_GET['id']);
                $dane = $repo->getAllGryByKat($katId);
               echo GryToHTML::GryToTableWithKat($dane);
            }
            ?>
        </div>
    </div>
   
</body>
</html>