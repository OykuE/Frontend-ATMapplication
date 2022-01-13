<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>TürksatBank</title>
    </head>
    <body>
        <header class="MainHeader" >
            
        </header>
    
        <div class="giris">
        </br>
        <h1>Hoş Geldiniz</h1></br>
            <h3>Lütfen Giriş Yapınız</h3>
            <form action="islem.php" method="post">
                <div class="user">
                    <input type="text" name="tc" placeholder="TC Kimlik No">
                </div>
                <div class="passw">
                    <input type="password" name="password" placeholder="Şifre">
                </div>
                </br>
                <button type="submit" class="button tamam">Tamam</button>
            </form>
        </div>
    </body>
</html>