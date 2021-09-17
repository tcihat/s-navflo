<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
<form  action="" id="hesapid" method="post" class="cihat">
        <input type="text" name="sayi1">
        <input type="text" name="sayi2">

        <select name="islem">
            <option value="toplama">toplama</option>
        <option value="cikarma">cikarma</option> 
        <option value="carpma">carpma</option> 
        <option value="bolme">bolme</option> 

    </select> 
   
    <input type="submit" id="hesapla" name="hesapla" class="form-control" value="hesapla">
    </form>


    <div id="hesapp"></div>
</body>


<script>

        $(document).ready(function(){
             $(".cihat").submit(function(c){
                    c.preventDefault();
             });
            $('#hesapla').click(function(e){

                //  alert("merhaba");
               
                $.ajax({
                    url: "hesap.php",
                    type: "post",
                    data:  $('#hesapid').serialize(),
                    success: function(data){
                        
                           $('#hesapp').html("sonuc=" + data);
                    },
                    error: function(request, status, error){
                        alert("hata oluştu" + error);
                    }   
                    

                });
               // $.post("ajax.php", degerler)
            });

        
        
        });
        
        
        

</script>
</html>









