	    <?php 
    error_reporting(0);
    include("ayar.php");
        
        if($_POST){

        	
        	

$kaynak=$_FILES["resim"]["tmp_name"];
$dosyaismi= $_FILES["resim"]["name"];
$dosyatipi=$_FILES["resim"]["type"]; 
$dosyaboyutu=$_FILES["resim"]["size"]; 
$hata=$_FILES["resim"]["error"]; 


$isim= md5(uniqid(rand()));

$uzanti=end(explode(".",$dosyaismi));

$yeniad=$isim.".".$uzanti;


$dosyakopyala=move_uploaded_file($kaynak,"resimler/".$yeniad);





        
            
            $urunadi       =    $_POST["urunadi"];
            $urunaciklama    =    $_POST["urunaciklama"];
            $urunfiyat	=	$_POST["urunfiyat"];
            $urunkategori = $_POST["urunkategori"];

            
            
            $ekle = mysqli_query($conn,"insert into urunler (urunadi ,urunaciklama,urunfiyat,urunkategori,yeniad) values ('$urunadi','$urunaciklama','$urunfiyat','$urunkategori','$yeniad')");

           
			
           
        }
    ?>

    <?php
header("Refresh: 1; url=urunekle.php");
?>
<!DOCTYPE html>
<html lang="tr">
<form action="login.php" method="POST">
<head>
	<title>Mami</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
				
					
					<span class="login100-form-title p-b-34 p-t-27">
						Ürün Ekleme Başarılı...
						
					</span>
					
				
	</div>
		</div>
	</div>
</html>