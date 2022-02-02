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
                    <label class="output" id="bakiye"><b>0.0 TL</b></label><br>
                    <Label><h3>Dönem Borcu:</h3></Label></br>
                    <label class="output"><b>0.0 TL</b></label>
                    <Label><h3>Asgari Ödenecek Tutar:</h3></Label></br>
                    <label class="output"><b>0.0 TL</b></label><br><br>
                </div></br></br></br></br></br></br></br></br></br></br></br></br>
                    <Label><h3>Ödemek İstediğiniz Tutarı Giriniz</h3></Label>
                    <div class="user">
                    <input class="output" type="text" name="gonderilecektutar" placeholder="0.0">
                    </div>
                </div>
        </div>
                <div class="footer">
                    <div class="btn-group" role="group">
                        <a href="secimekrani.php"><button type="button" class="btn btn-iptal">Geri Dön</button></a>
                    </div>
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
        
       

       
        function geriFunction(){
    let params = new URLSearchParams(document.location.search);
        let userId = params.get("userId");
        let page = params.get("page");
        window.location.href = "secimekrani.php?userId=" + userId + "&page=" + page; 
}

    </script>   