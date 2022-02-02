<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0, shrink-to-fit=no">
        <link href="css\bootstrap.min.css" rel="stylesheet"/>
        <link href="css\style.css" rel="stylesheet"/>
        <title>TürksatBank</title>
    </head>
    <header class="MainHeader"> </header>
    <body>
        <div class="giris">
            <h3>İşlem Yapmak İstediğiniz Kart Türünü Seçiniz</h3><br><br> 
            <div class="list-group">
                 <button class="list-group-item list-group-item-secim" onclick="bankaFunction()">Banka Kartı</button>
                 <button class="list-group-item list-group-item-secim" onclick="krediFunction()">Kredi Kartı</button>
                 <button class="list-group-item list-group-item-secim" onclick="avantajFunction()">Avantajlı Kredi Kartı</button>
            </div>
        </div>
        <div class="footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-iptal"  onclick="geriFunction()">Geri Dön</button></a>
                    </div>
        </div>
    </body>
</html>

<script>
 function bankaFunction(){
    let cardType = "banka";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    console.log(userId,cardType);
   window.location.href = "kartbilgileri.php?cardType="+cardType+"&userId="+userId;  
 }

 function krediFunction(){
    let cardType = "kredi";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    console.log(userId,cardType);
   window.location.href = "kartbilgileri.php?cardType="+cardType+"&userId="+userId;  
 }

 function avantajFunction(){
    let cardType = "avantali";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    console.log(userId,cardType);
   window.location.href = "kartbilgileri.php?cardType="+cardType+"&userId="+userId;  
 }

 function geriFunction(){
    let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        let page = params.get("page");
        window.location.href = "secimekrani.php?userId=" + userId + "&page=" + page; 
}
</script>

