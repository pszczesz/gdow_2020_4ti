<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia ze studentami</title>
   <link rel="stylesheet" href="cw18.css">
</head>

<body>
    <h1>Zajęcia ze studentami</h1>
    <div id="wrapper">
        <div> 
            <?php
                require "functions.php";
                getAll();
                CountAll();
            ?>
        </div>
        <div>
            <a href="formularz.html">Dodaj nowego studenta</a>
        </div>
        <div>
            <a href="admin.php">Zarządzaj studentami</a>
        </div>
    </div>

</body>

</html>