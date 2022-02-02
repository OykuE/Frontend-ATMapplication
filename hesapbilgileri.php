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
                <div class="panel-body">
                     <Label><h4>Hesap Türü</h4></Label><br>
                     <label id="hesaptur" class="output"><b></b></label><br><br>
                
                     <Label><h4>Hesap Numarası</h4></Label><br>
                    <label id="hesapno" class="output"><b></b></label><br><br>

                     <Label><h4>Hesap Bakiyesi</h4></Label><br>
                     <label id="bakiye" class="output"></b></label><br><br>    
                </div> 
     </div>     
         <div class="footer">
                    <div class="btn-group" role="group">
                       <button type="button" class="btn btn-iptal" onclick="geriFunction()">Geri Dön</button>
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
                        $("#hesaptur").text(json["accountType"]);
                        $("#hesapno").text(json["accountNumber"]);
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
        window.location.href = "hesapsecim.php?userId="+userId + "&page=" + page;  
}
    </script>   

