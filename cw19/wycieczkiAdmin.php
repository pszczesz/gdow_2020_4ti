<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro turystyczne</title>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <link rel="stylesheet" href="cw19.css">
</head>

<body>
    <div id="baner">
        <div id="first">Biuro turystyczne</div>
        <div><img src="media/gory2.png" alt="góry"></div>
    </div>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="cw19.php">Lista wycieczek</a></li>
                <li><a href="wycieczkiAdmin.php">Zarządzaj wycieczkami</a></li>
                <li><a href="uczestnicyWycieczki.php">Uczestnicy wycieczki</a></li>
                <li><a href="">Inne2</a></li>
            </ul>
        </nav>
        <div id="main">
            <?php
            require "functions.php";
            $dane = getAllWycieczki();
           
            echo wycieczkiAdmin($dane);
            ?>
            <div>
                <a class="btn1" href="addNewWycieczka.php">Dodaj nową wycieczkę</a>
            </div>
        </div>
        
    </div>
</body>

</html>