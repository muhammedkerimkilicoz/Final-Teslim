  <?php 
    
    include("ayar.php");
        
        if($_POST){
        
            
            $ad      =    $_POST["ad"];
            $soyad   =    $_POST["soyad"];
            $mail  =    $_POST["mail"];
            $adres   =    $_POST["adres"];
            $tel   =    $_POST["tel"];
            $urunkod  =    $_POST["urunkod"];
            
           
            $ekle = mysqli_query($conn,"insert into siparis (ad ,soyad,mail,adres,tel,urunkod) values ('$ad','$soyad','$mail','$adres','$tel','$urunkod')");
            
            
           
        }
    ?>
			
           
        
    

     <?php
header("Refresh: 1; url=iletisim.php");
?>