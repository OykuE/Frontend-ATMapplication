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
            <br><img src="kredi-karti.png" alt="kredi kartı" style="height: 180px; width:270px;" ><br>
            <br>

                <Label><h4>Kart Türü</h4></Label><br>
                 <label class="output" id="turLbl"><b></b></label><br><br>

                <Label><h4>Kart Numarası</h4></Label><br>
                <label class="output" id="numaraLbl"><b></b></label><br><br>
              
                 <Label><h4>Kart Borcu</h4></Label><br>
                 <label class="output" id="borcLbl"><b></b></label><br><br>

         </div>


         
         <div class="footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-iptal" onclick="geriFunction()">Geri Dön</button></a>
                    </div>
        </div>        


    </body>
</html>


     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
 
 <script>
     $(document).ready(function processForm( e ){
         let params = new URLSearchParams(document.location.search);
         inputs = JSON.parse(JSON.stringify($(this).serializeArray()))
         jsonReq = {"cardType": params.get("cardType"), "userId": params.get("userId")}
         console.log(jsonReq)
         $.ajax({
             url: 'http://localhost:8080/api/cards/cards',
             dataType: 'text',
             type: 'post',
             contentType: 'application/json',
             data: JSON.stringify(jsonReq),
             success: function( data, textStatus, jQxhr ){
                 if(data) {
                     console.log(data);
                     json = JSON.parse(data);
                     $("#numaraLbl").text(json["cardNumber"]);
                     $("#turLbl").text(json["cardType"]);
                     $("#borcLbl").text(json["debt"]);
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
        window.location.href = "kartsecim.php?userId="+userId + "&page=" + page;  
}

</script>