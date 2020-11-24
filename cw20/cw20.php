<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw20.css">
</head>

<body>
    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload files</legend>
                <div class="line">
                    <label for="file">Wybierz plik do wysłania na serwer</label>
                    <input type="file" name="plikDoZapisu" id="plikDoZapisu">
                </div>
                <div class="line">
                    <input type="submit" value="Wyślij plik" name="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>