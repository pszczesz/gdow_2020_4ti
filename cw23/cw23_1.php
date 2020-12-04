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
    <div class="container-fluid">
        <div>
            <h3>Lista kategorii</h3>
           <?php
            require_once "models/Repository.php";
            require_once "KategorieToHTML.php";
            $repo = new Repository();
            $kategorie = $repo->getAllKategorie();
            echo KategorieToHTML::katToList($kategorie);
           ?>
                
            
        </div>
        <div></div>
    </div>
</body>
</html>