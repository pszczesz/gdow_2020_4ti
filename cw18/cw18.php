<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia ze studentami</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px;
        }

        th,
        td {
            border: solid 1px grey;
            padding: 8px;
        }

        th {
            background-color: lightcoral;
            color: brown;
        }

        tr:nth-child(odd) {
            background-color: lightblue;
        }

        .right {
            text-align: right;
        }
    </style>
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
    </div>

</body>

</html>