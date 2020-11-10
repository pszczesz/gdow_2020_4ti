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
                <li><a href="">Zarządzaj wycieczkami</a></li>
                <li><a href="">Inne</a></li>
                <li><a href="">Inne2</a></li>
            </ul>
        </nav>
        <div id="main">
            <div>
                <?php
                require "functions.php";
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $dane = getWycieczkaById($id);
                    echo "<div class='info'>Zapisywanie na wycieczkę {$dane[1]} cena: {$dane[2]} data: {$dane[3]}</div>";
                }else{
                    header("Location: cw19.php");
                }
                ?>
            </div>
            <div>
                <form action="addToWycieczka.php" method="post">
                    <fieldset>
                        <legend>Dane uczestnika wycieczki</legend>
                        <div class="line"><label for="imie">Podaj imię: </label>
                            <input type="text" name="imie" id="imie" required></div>
                        <div class="line"><label for="nazwisko">Podaj nazwisko: </label>
                            <input type="text" name="nazwisko" id="nazwisko" ></div>
                        <input type="hidden" name="wycieczkaid" value='<?php echo $id ?>'>
                        <div class="line"><label for=""></label>
                            <input type="submit" value="Zapisz na wycieczkę"></div>
                    </fieldset>

                </form>
            </div>


        </div>
    </div>
</body>

</html>