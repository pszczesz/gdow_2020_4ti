<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #baner{height:130px;font-size:3em;text-align:center;padding:40px;}
        #lewy{float:left;width:70%; }
        #prawy{float:left;width:29%}
        table{width:80%;border-collapse:collapse;margin:20px;}
        td,th{border:solid black 1px;}
        </style>
</head>
<body>
    <div id="baner">ADMINISTRACJA</div>
    <div id="lewy">
        
        <?php
        require "functions.php";
        $dane = getUsers();
        echo "<table><tr><th>Użytkownik</th><th>Rola</th></tr>\n";
        foreach($dane as $row){
            echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>\n";
        }
        echo "</table>\n";
        ?>
    </div>
    <div id="prawy">
        <p><a href='#'>Domowa</a></p>
        <p><a href='#'>O nas</a></p>
        <p><a href='#'>Kontakt</a></p>
    </div>

</body>
</html>