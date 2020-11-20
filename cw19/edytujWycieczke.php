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
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                $row = getWycieczkaById($id);
               // var_dump($row);
                echo "<h3>Edycja wycieczki: {$row[1]} za cenę: {$row[2]} zł.</h3>";
            }else{
                header("Location: wycieczkiAdmin.php");
            }
            ?>
             <form action="updateWycieczka.php" method="post">
                    <fieldset>
                        <legend>Dane wycieczki</legend>
                        <input type="hidden" name="id" value='<?php echo $row[0]; ?>'>
                        <div class="line"><label for="miejsce">Podaj miejsce: </label>
                            <input type="text" name="miejsce" id="miejsce" required value='<?php echo $row[1];?>'></div>
                        <div class="line"><label for="cena">Podaj cenę: </label>
                            <input type="number" name="cena" id="cena" min="0" max="10000" step="0.01" required value='<?php echo $row[2];?>'> zł</div>
                            <div class="line"><label for="data">Podaj datę: </label>
                            <input type="date" name="data" id="data" required value='<?php echo $row[3];?>'></div>
                        
                        <div class="line"><label for=""></label>
                            <input type="submit" value="Zapisz wycieczkę"></div>
                    </fieldset>

                </form>
        </div>
    </div>
</body>

</html>