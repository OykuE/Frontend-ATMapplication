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
                <h3 class="panel-title">Vadesiz TL</h3>
                <div class="panel-body">
                     <Label name="ad"><h4>Ad</h4></Label><br>
                     <label class="output"><b></b></label><br><br>
              
                     <Label name="soyad"><h4>Soyad</h4></Label><br>
                     <label class="output"><b></b></label><br><br>
                
                     <Label name="hesapno"><h4>Hesap Numarası</h4></Label><br>
                    <label class="output"><b></b></label><br><br>

                     <Label name="bakiye"><h4>Hesap Bakiyesi</h4></Label><br>
                     <label class="output"></b></label><br><br>    
                </div> 
     </div>     
         <div class="footer">
                    <div class="btn-group" role="group">
                        <a href="secimekrani.php"><button type="button" class="btn btn-iptal">İptal</button></a>
                    </div>
        </div>        


    </body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script>
        (function($){
            
            function processForm(userId){
                function processForm2(accountType){
                inputs = JSON.parse(JSON.stringify($(this).serializeArray()))
                jsonReq = {"userId": userId, "accountType": 'accountType' }
                console.log(jsonReq)
                $.ajax({
                    url: 'http://localhost:8080/api/accounts/accounts',
                    dataType: 'text',
                    type: 'post',
                    contentType: 'application/json',
                    data: JSON.stringify(jsonReq),
                    var veri = JSON.parse(data);
                    success: function( data, textStatus, jQxhr ){
                        if(data) {
                            document.getElementById("hesapno")=data.accountType;
                            document.getElementById("bakiye")=data.balance;
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown );
                    }
                });
            e.preventDefault();
        }
    }
        $('#my-form').submit( processForm );
    })(jQuery);
    </script>   

