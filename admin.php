<?php 

include("ayar.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}

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
						Admin Sayfasına Hoşgeldiniz...
						
					</span>
					<center><a href=urunler.php><button form="urunler.php"  class="login100-form-btn" name="ekle">
							Ürünler
						</button></center></br>
						<center><a href=siparis.php><button form="urunler.php"  class="login100-form-btn" name="ekle">
							Siparişler
						</button></center></br>
					<center><a href=urunekle.php><button form="urunekle.php"  class="login100-form-btn" name="ekle">
							Ürün Ekle
						</button></center></br>
					
					<center><a href=logout.php><button form="logout.php"  class="login100-form-btn" name="ekle">
							Çıkış
						</button></center>
				
	</div>
		</div>
	</div>
</html>