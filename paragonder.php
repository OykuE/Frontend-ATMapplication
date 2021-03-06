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
        </br> 
                <div class="label">
                    <Label><h3>Hesap Bakiyeniz:</h3></Label></br>
                    <label class="output" id="bakiye"><b>0.0 TL</b></label><br><br>
                </div></br></br></br></br></br>
                <div class="label">
                    <Label><h3>Para Gönderilecek Hesabın IBAN Numarasını Giriniz</h3></Label>
                    <div class="user">
                    <input class="output" type="text" name="iban" placeholder="Iban No">
                    </div>
                    <Label><h3>Gönderilecek Tutarı Giriniz</h3></Label>
                    <div class="user">
                    <input class="output" type="text" id="tutar" placeholder="0.0 TL">
                    </div>
                </div>
        </div>
                <div class="footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-iptal" onclick="geriFunction()">Geri Dön</button>
                    </div>
                    <div class="btn-group" role="group">
-                        <button type="submit" class="btn btn-onay" onclick="tutarHesapla()">Tamam</button>
-                </div>
                </div>
        
    </body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
 
    <script>
        $(document).ready(function processForm( e ){
            let params = new URLSearchParams(document.location.search);
            inputs = JSON.parse(JSON.stringify($(this).serializeArray()))
            jsonReq = {"accountType": params.get("accountType"), "userId": params.get("userId")}
            console.log(jsonReq)
            $.ajax({
                url: 'http://localhost:8080/api/accounts/accounts',
                dataType: 'text',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify(jsonReq),
                success: function( data, textStatus, jQxhr ){
                    if(data) {
                        console.log(data);
                        json = JSON.parse(data);
                        $("#bakiye").text(json["balance"]);
                    }
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        }); 
        
        function tutarHesapla() {
        console.log($('#tutar').val());
        let params = new URLSearchParams(document.location.search);
        inputs = JSON.parse(JSON.stringify($(this).serializeArray()))
        jsonReq = {"accountType": params.get("accountType"), "userId": params.get("userId"), "withdraw": $('#tutar').val()}
        console.log(jsonReq)
        $.ajax({
                url: 'http://localhost:8080/api/accounts/withdraw',
                dataType: 'text',
                type: 'put',
                contentType: 'application/json',
                data: JSON.stringify(jsonReq),
                success: function( data, textStatus, jQxhr ){
                    if(data) {
                        console.log(data);
                        // json = JSON.parse(data);
                        if(data !== "-2.0") {
                            $("#bakiye").text(data);
                        } else {
                            alert("Bakiyeniz yetersiz")
                        }
                        
                    }
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

        
    }   
        
       

        function geriFunction(){
    let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        let page = params.get("page");
        window.location.href = "hesapsecim.php?userId=" + userId + "&page=" + page; 
}

    </script>   