a <?php 

if ($_GET) 
{

include("ayar.php"); 


if (mysqli_query($conn,"DELETE FROM siparis WHERE id =".(int)$_GET['id'])) 
{
    header("location:siparisuyari.php"); 
}
}

?>