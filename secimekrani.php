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
        <div class="giris" style="height: auto">
            <h3>Yapmak İstediğiniz İşlem Türünü Seçiniz</h3><br><br> 
            <div class="list-group">
                 <button type="button" class="list-group-item list-group-item-secim" id="hesapbilgisi" onclick="hesapsecimFunction()">Hesap Bilgilerimi Görüntüle</button>
                 <button type="button" class="list-group-item list-group-item-secim" id="kartbilgisi" onclick="kartsecimFunction()">Kart Bilgilerimi Görüntüle</button>
                 <button type="button" class="list-group-item list-group-item-secim" id="paracek" onclick="hesapsecimFunction()">Hesabımdan Para Çek</button>
                 <button type="button" class="list-group-item list-group-item-secim" id="parayatir" onclick="hesapsecimFunction()">Hesabıma Para Yatır</button>
                 <button type="button" class="list-group-item list-group-item-secim" id="paragonder" onclick="hesapsecimFunction()">Başka Bir Hesaba Para Gönder</button>
                 <button type="button" class="list-group-item list-group-item-secim" id="borcode" onclick="hesapsecimFunction()">Borç Öde</button>
            </div>
        </div>
        <div class="footer">
            <div class="btn-group" role="group">
            <a href="cikis.php"><button type="button" class="btn btn-iptal">Çıkış</button></a>
            </div>     
        </div>
   
    </body>
</html>   

<script>
function hesapsecimFunction(){
        let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        console.log(event.srcElement.id);
        window.location.href = "hesapsecim.php?userId="+userId+"&page="+event.srcElement.id;
}

function kartsecimFunction(){
        let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        console.log(userId);
        window.location.href = "kartsecim.php?userId="+userId+"&page="+event.srcElement.id;
        
} 

</script>
