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
        <form action="insertWycieczka.php" method="post">
                    <fieldset>
                        <legend>Dane wycieczki</legend>
                        <div class="line"><label for="miejsce">Podaj miejsce: </label>
                            <input type="text" name="miejsce" id="miejsce" required></div>
                        <div class="line"><label for="cena">Podaj cenę: </label>
                            <input type="number" name="cena" id="cena" min="0" max="10000" step="0.01" required> zł</div>
                            <div class="line"><label for="data">Podaj datę: </label>
                            <input type="date" name="data" id="data" required ></div>
                        
                        <div class="line"><label for=""></label>
                            <input type="submit" value="Dodaj wycieczkę"></div>
                    </fieldset>

                </form>
            <?php
           
            ?>
        </div>
    </div>
</body>

</html>