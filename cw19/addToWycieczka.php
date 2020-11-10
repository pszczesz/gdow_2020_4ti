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
                <li><a href="uczestnicyWycieczki.php">Uczestnicy wycieczki</a></li>
                <li><a href="">Inne2</a></li>
            </ul>
        </nav>
        <div id="main">
            <div>
                <?php
                require "functions.php";
                if (isset($_POST['imie'])) {
                    $imie = trim($_POST['imie']);
                    $nazwisko = trim($_POST['nazwisko']);
                    $wycieczkaid = intval($_POST['wycieczkaid']);
                    if (empty($imie) || empty($nazwisko)) {
                        header("Location: zapisz.php?id={$wycieczkaid}");
                    }
                    echo "dodawanie uczestnika do wycieczki";
                    $wynik  = insertUczestnik($wycieczkaid, $imie, $nazwisko);
                    var_dump($wynik);
                    echo "<div>Dodano uczestnika do wycieczki</div>";
                }

                ?>
            </div>
            <div>
              <?php echo  "<a href='uczestnicyWycieczki.php?id={$wycieczkaid}'>Uczestnicy tej wycieczki</a>" ?>
            </div>
        </div>
</body>

</html>