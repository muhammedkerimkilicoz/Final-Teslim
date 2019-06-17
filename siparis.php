
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
			<div class="wrap-login101">
				<form class="login100-form validate-form">
				<div class="col-md-7">

					<span class="login100-form-title p-b-34 p-t-27">
						Ürünler
					</span>
<table class="table">
    
    <tr>
        <th>No</th>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Mail</th>
        <th>Adres</th>
        <th>Telefon</th>
        <th>Ürün Kodu	</th>

        <th></th>
        <th></th>
    </tr>



<?php 
include("ayar.php");
$sorgu = mysqli_query($conn,"SELECT * FROM siparis"); 

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; 
$ad = $sonuc['ad'];
$soyad = $sonuc['soyad'];
$mail = $sonuc['mail'];
$adres = $sonuc['adres'];
$tel = $sonuc['tel'];
$urunkod = $sonuc['urunkod'];

 
?>
    
    <tr>
        <td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
        <td><?php echo $ad; ?></td>
        <td><?php echo $soyad; ?></td>
        <td><?php echo $mail; ?></td>
        <td><?php echo $adres; ?></td>
        <td><?php echo $tel; ?></td>
        <td><?php echo $urunkod; ?></td>
        
        
        <td><a href="siparissil.php?id=<?php echo $id; ?>" class="btn btn-primary">Sil</a></td>
    </tr>

<?php 
} 
 
?>

</table>
</div>

    </tr>
					
				<center><a href="admin.php"><button form="admin.php"  class="login100-form-btn" name="ekle">
							Geri
						</button></center>	
				
	</div>
		</div>
	</div>

</html>