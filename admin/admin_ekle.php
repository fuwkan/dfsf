<?php
include("ayar.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:login.php");
}
else {
    
}


$sqlin= "select * from kurban"; 
$sql_baglan= mysql_query($sqlin); 
$toplamuye=mysql_num_rows($sql_baglan);
?>
<?php 

$sqlin= "select * from admin"; 
$sql_baglan= mysql_query($sqlin); 
$toplamadmin=mysql_num_rows($sql_baglan);

?>
<?php
 $id = $_POST['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

$baglan=mysqli_connect("localhost","takipedi_dene","GQu5)y^dC","takipedi_dene"); 
mysqli_set_charset($baglan, "utf8");
 
$sql="select tckimlikno from admin WHERE tckimlikno='$tc'";
 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "Bu TC Kimlik No daha önce kaydedilmiş";
 
} else{
$sqlekle="INSERT INTO admin( id, username, email, password) 
VALUES ('$id','$username','$email','$password')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
};
 header("refresh:0;url=adminler.php");
?>