<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="f1" method="post" action="wynik.php">
    <div class="line">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>
    <div class="line">
        <label for="haslo">Hasło</label>
        <input type="password" name="haslo" id="haslo">
    </div>
    <div class="line">
    <div class="line">
        <label for="">Potwierdzam znajomość regulaminu</label>
        <input type="checkbox" name="check" id="check">
    </div>
    <input type="submit" value="Zatwierdź">
    </form>
    <script>
        window.onload = function(){
            document.querySelector("#f1").onsubmit = function(e){
                if(document.querySelector("#check").checked==false){
                    return false;
                }
                return true;
            }
        }
    </script>
</body>
</html>