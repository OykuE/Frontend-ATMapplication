<!DOCTYPE html>
<html lang="tr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0 shrink-to-fit=no">
        <link href="css\bootstrap.min.css" rel="stylesheet"/>
        <link href="css\style.css" rel="stylesheet"/>
        <title>TürksatBank</title>
    </head>
    <body>
        <header class="MainHeader" >  
        </header>
        <div class="giris">
        </br></br>
         <h1>Hoş Geldiniz</h1></br>
         </br></br>
         <h3>Lütfen Giriş Yapınız</h3></br>
            <form id="my-form">
                <div class="user">
                    <input type="text" name="tckNo" placeholder="TC Kimlik No">
                </div>
                <div class="passw">
                    <input type="password" name="password" placeholder="Şifre">
                </div>
                <div>
                    <button name="loginButton" type="submit" class="btn btn-onay">Tamam</button>
                </div>
            </form>
                </br>
    </body>   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script>
        (function($){
            
            function processForm( e ){
                inputs = JSON.parse(JSON.stringify($(this).serializeArray()))
                jsonReq = {"tckNo": inputs[0].value, "password": inputs[1].value }
                console.log(jsonReq)
                $.ajax({
                    url: 'http://localhost:8080/api/users/login-user',
                    dataType: 'text',
                    type: 'post',
                    contentType: 'application/json',
                    data: JSON.stringify(jsonReq),
                    success: function( data, textStatus, jQxhr ){
                        if(data) {
                            console.log(data);
                            json = JSON.parse(data);
                            var userId = json["userId"];
                            window.location.href = "secimekrani.php?userId="+userId;
                        }
                     else{
                            alert("Hatalı TC Kimlik Numarası Şifre Girişi");
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown );
                    }
                });
            e.preventDefault();
        }
        $('#my-form').submit( processForm );
    })(jQuery);
    </script>   