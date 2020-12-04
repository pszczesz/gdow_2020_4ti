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
    <?php
    require_once "models/Repository.php";
    require_once "GryToHTML.php";
    $repo = new Repository();
    $gry = $repo->getAllGry();
    //var_dump($gry);
    echo GryToHTML::GryToTable($gry);
    ?>
    <div>
        <a class="btn btn-dark btn-lg p-3 m-4" href="cw23_1.php">Kategorie gier</a>
    </div>
</body>
</html>