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
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $row = getWycieczkaById($id);
                echo "<h3>Usuwanie wycieczki: {$row[1]} w cenie: {$row[2]} zł data: {$row[3]}</h3>";
                echo "<h4>Ilość uczestników tej wycieczki: " . countUczestnicy($id) . "</h4>";
            }
            if (isset($_POST['wycieczka'])) {
                $wycieczkaId = intval($_POST['wycieczka']);
                deleteWycieczka($id);
                echo "<div>Usunięto wycieczkę i uczestników</div>";
            }
            ?>
            <div>
                <?php
                if (!isset($_POST['wycieczka'])) {

                ?>
                    <form id="formConfirm" method="post">
                        <input type="hidden" name="wycieczka" value='<?php echo $id; ?>'>
                        <div class="line">Czy potwierdasz usunięcie wycieczki wraz z jej uczestnikami</div>
                        <div class="line">
                            <input type="submit" value="TAK">
                            <input type="reset" value="NIE">
                        </div>

                    </form>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <script>
        window.onload = function() {
            document.querySelector("#formConfirm").onreset = function() {
                //alert("Anuluj");
                location.href = "wycieczkiAdmin.php";
            }
        }
    </script>
</body>

</html>