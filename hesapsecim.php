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
            <h3>İşlem Yapmak İstediğiniz Hesap Türünü Seçiniz</h3><br><br> 
            <div class="list-group">
                 <button id="vadesiz" class="list-group-item list-group-item-secim" onclick="vadesizFunction()">Vadesiz Hesabım</button>
                 <button id="vadeli" class="list-group-item list-group-item-secim" onclick="vadeliFunction()">Vadeli Hesabım</button>
                 <button id="yatirim" class="list-group-item list-group-item-secim" onclick="yatirimFunction()">Yatırım Hesabım</button>
                 <button id="doviz" class="list-group-item list-group-item-secim" onclick="dovizFunction()">Döviz Hesabım</button>
            </div>
        </div>
        <div class="footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-iptal"  onclick="geriFunction()">Geri Dön</button>
                    </div>
        </div>               
    </body>
</html>
<script>
 function vadesizFunction(){
    let accountType = "vadesiz";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    let page = params.get("page");
    if(params.get("page") == "hesapbilgisi"){
        window.location.href = "hesapbilgileri.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paracek"){
        window.location.href = "paracek.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "parayatir"){
        window.location.href = "parayatir.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "borcode"){
        window.location.href = "borcode.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paragonder"){
        window.location.href = "paragonder.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    
  
 }

 function vadeliFunction(){
    let accountType = "vadeli";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    let page = params.get("page");
    if(params.get("page") == "hesapbilgisi"){
        window.location.href = "hesapbilgileri.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paracek"){
        window.location.href = "paracek.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "parayatir"){
        window.location.href = "parayatir.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "borcode"){
        window.location.href = "borcode.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paragonder"){
        window.location.href = "paragonder.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
     
 }

function yatirimFunction(){
    let accountType = "yatirim";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    let page = params.get("page");
    if(params.get("page") == "hesapbilgisi"){
        window.location.href = "hesapbilgileri.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paracek"){
        window.location.href = "paracek.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "parayatir"){
        window.location.href = "parayatir.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "borcode"){
        window.location.href = "borcode.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paragonder"){
        window.location.href = "paragonder.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    
 }

 function dovizFunction(){
    let accountType = "doviz";
    let params = new URLSearchParams(document.location.search);
    let userId = params.get("userId");
    let page = params.get("page");
    if(params.get("page") == "hesapbilgisi"){
        window.location.href = "hesapbilgileri.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paracek"){
        window.location.href = "paracek.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "parayatir"){
        window.location.href = "parayatir.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "borcode"){
        window.location.href = "borcode.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
    else if(params.get("page") == "paragonder"){
        window.location.href = "paragonder.php?accountType="+accountType+"&userId="+userId + "&page=" + page;  
    }
     
 }
 
function geriFunction(){
    let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        let page = params.get("page");
        window.location.href = "secimekrani.php?userId=" + userId + "&page=" + page; 
}
</script>
