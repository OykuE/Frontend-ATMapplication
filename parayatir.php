<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0, shrink-to-fit=no">
        <link href="css\bootstrap.min.css" rel="stylesheet"/>
        <link href="css\style.css" rel="stylesheet"/>
        <title>TürksatBank</title>
    </head>
    <body>
        <header class="MainHeader" >
            
        </header>
    
        <div class="giris">
        </br>
        </br> </br>
                <div class="label">
                    <Label><h3>Hesap Bakiyeniz:</h3></Label></br>
                    <label class="output"><b>0.0 </b></label><br><br>
                </div></br></br></br></br></br></br></br>
                <form action="islem.php" method="post">
                <div class="label">
                    <Label><h3>Yatırmak İstediğiniz Tutarı Giriniz</h3></Label><br>
                    <div class="user">
                    <input class="output" type="text" name="tutar" placeholder="0.0">
                    </div>
                </div>
                </br>
            </form>
        </div>
                <div class="footer">
                    <div class="btn-group" role="group">
                        <a href="secimekrani.php"><button type="button" class="btn btn-iptal">İptal</button></a>
                    </div>
                </div>
        
    </body>
</html>