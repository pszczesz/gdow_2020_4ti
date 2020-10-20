<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 17 - Tabliczka mnożenia</title>
    <style>
        .line{margin: 20px;}
        label{display: inline-block;text-align: right;width: 160px;}
        input[type=submit]{margin-left: 180px;width: 150px;padding: 10px;}
        table{border-collapse: collapse;margin: 30px;}
        td{padding: 8px;border: solid 1px grey;text-align: right;}
        tr:hover{font-weight: bold;}
        .wyr{background-color: lightseagreen;}
    </style>
</head>
<body>
    <h1>Ćwiczenie 17 - Tabliczka mnożenia</h1>
    <div>
        <form  method="post">
            <div class="line">
                <label for="rows">Podaj liczbę wierszy: </label>
                <input type="number" name="rows" id="rows">
            </div>
            <div class="line">
                <label for="cols">Podaj liczbę kolumn: </label>
                <input type="number" name="cols" id="cols">
            </div>
            <input type="submit" value="Generuj">
        </form>
    </div>
    <div id="wynik">
        <?php
        require "functions.php";
        var_dump($_POST);
        if(isset($_POST['rows'])){
            $rows = intval($_POST['rows']);
            $cols = intval($_POST['cols']);
            $rows = $rows<=0 || $rows>50? 20 : $rows;
            $cols = $cols<=0 || $cols>50? 20 : $cols;
           // echo "rows: {$rows} cols: {$cols}";
           echo generTab($rows,$cols);
        }
        ?>
    </div>
</body>
</html>