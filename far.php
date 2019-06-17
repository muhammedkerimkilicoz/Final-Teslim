<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<title>Oto Yedek Parça</title>

 		
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<header>
			
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +90 534 615 92 31 </a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> muhammedkerimkilicoz@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Kavacık</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="admin.php"><i class="fa fa-user-o"></i>Admin Panel</a></li>
					</ul>
				</div>
			</div>
			


			
			<div id="header">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						

						

						
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								

								
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</header>
		

		
		<nav id="navigation">
			
			<div class="container">
				
				<div id="responsive-nav">
					
					<ul class="main-nav nav navbar-nav">
						<li><a href="anasayfa.php">Anasayfa</a></li>
						<li><a href="jant.php">Jant</a></li>
						<li><a href="egzoz.php">Egzoz Sistemi</a></li>
						<li  class="active"	><a href="far.php">Aydınlatma</a></li>
						<li><a href="motor.php">Motor Parçaları</a></li>
					
				</div>
				
			</div>
			
		</nav>
		

		
		<div id="breadcrumb" class="section">
			
			<div class="container">
				
			</div>
			
		</div>
		

		
		<div class="section">
			
			<div class="container">
				
				<div class="row">
					

					
					<div id="store" class="col-md-9">
						
											

						


						<div class="row">

							
														<?php 
include("ayar.php");
$sorgu = mysqli_query($conn,"SELECT * FROM urunler WHERE urunkategori='Far'"); 

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; 
$urunadi = $sonuc['urunadi'];
$urunaciklama = $sonuc['urunaciklama'];
$urunfiyat = $sonuc['urunfiyat'];
$urunkategori = $sonuc['urunkategori'];
$yeniad = $sonuc['yeniad'];

?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
							
									<div class="product-img">
										<?php echo'<img src="resimler/'.$yeniad.'">' ?>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $urunkategori; ?></p>
										<p class="product-name"><a href="#"><?php echo $urunadi; ?></a></p>
										<h3 class="product-name"><a href="#"><?php echo $urunaciklama; ?></a></h3>
										<h4 class="product-price"><?php echo $urunfiyat; ?></h4>
										
										
									</div>
									<div class="add-to-cart">
									<a href="iletisim.php">	<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sipariş Ver</button>
									</div>
									
								</div>
							</div>
							<?php 
} 

?>
							

							
						

						
					</div>
					
				</div>
				
			</div>
			
		</div>
		

		
		<div id="newsletter" class="section">
			
			<div class="container">
				
			</div>
			
		</div>
		

		
		<footer id="footer">
			
			<div class="section">
				
				<div class="container">
					
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">İletişim</h3>
								<p>İstanbul Medipol Üniversitesi | Kavacık Kampüsü</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Kavacık</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+90 534 615 92 31</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>muhammedkerimkilicoz@gmail.com</a></li>
								</ul>
							</div>
						</div>

						
					</div>
					
				</div>
				
			</div>
			

			
			<div id="bottom-footer" class="section">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>
							
							</span>
						</div>
					</div>
						
				</div>
				
			</div>
			
		</footer>
		

		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
