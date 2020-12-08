<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="cw23.css">
    <title>Document</title>
</head>
<body>
    <h1 class="badge-dark text-center p-3 m-4" style="font-variant: small-caps;">Dodawanie nowej gry</h1>
    <div class="conteiner-flow" >
        <div>
            <form method="post" class="border p-4 m-2">
                <div class="form-group">
                    <label for="nazwa">Tytuł Gry</label>
                    <input id="nazwa" class="form-control" type="text" name="nazwa" required>
                </div>
                <div class="form-group">
                  <label for="cena">Cena</label>
                  <input type="number" name="cena" id="cena" class="form-control" placeholder="Podaj cenę gry" required min="0" step="0.01">                  
                </div>
               <div class="form-group">
                    <label for="kategoria">Text</label>
                    <select id="kategoria" class="form-control" name="kategoria">
                        <?php
                            require_once "models/Repository.php";
                            require_once "KategorieToHTML.php";
                            $repo = new Repository();
                            $kats = $repo->getAllKategorie();
                            echo KategorieToHTML::KatToOption($kats);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-dark w-100" type="submit" value="Zapisz Grę">
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['nazwa'])){
            $gra = new Gra(-1,trim($_POST['nazwa']),floatval($_POST['cena']),$_POST['kategoria']);
            $result = $repo->saveGra($gra);
            if($result){
                header("Location: cw23.php");
            }else{
                echo "<div class='badge badge-warning'>Błąd zapisu</div>";
            }
        }
        ?>
    </div>
   
</body>
</html>