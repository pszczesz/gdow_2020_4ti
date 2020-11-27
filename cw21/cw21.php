<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw21.css">
    <title>Operacje na stringach cw21</title>
</head>

<body>
    <h1>Operacje na stringach cw21</h1>
    <div id="wrapper">
        <div>
            <form method="post">
                <div class="line">
                    <label for="text">Wpisz tekst</label>
                    <input type="text" name="text" id="text"></input>
                </div>
                <div class="line">
                    <label for="search">Znak lub fraza do szukania</label>
                    <input type="text" name="search" id="search"></input>
                </div>
                <div class="line">
                    <label for="wybor">Wybierz opcję</label>
                    <select name="wybor" id="wybor">
                        <option value="wstaw">wstaw</option>
                        <option value="odwroc">odwroc</option>
                        <option value="szukaj">szukaj</option>
                        <option value="litery">litery</option>
                    </select>
                </div>
                <div class="line">

                    <input type="submit" value="Wykonaj"></input>
                </div>
            </form>
        </div>
        <div id="wynik">
            <?php
            require "functions.php";
            if (isset($_POST['text'])) {
                $text = trim($_POST['text']);
                $search = trim($_POST['search']);
                $wybor = trim($_POST['wybor']);
                switch ($wybor) {
                    case "wstaw":
                        echo "<div>Po wstawieniu do tekstu: \"{$text}\": " . insertChar($text, $search) . "</div>";
                        break;
                    case "odwroc":
                        echo "<div>Po odwróceniu tekstu: \"{$text}\": " . reverse($text) . "</div>";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>