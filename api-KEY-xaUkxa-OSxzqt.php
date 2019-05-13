<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="0;URL=hata.php">
<head></html>
<?php
 $id = $_POST['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 
$baglan=mysqli_connect("localhost","takipedi_dene","GQu5)y^dC","takipedi_dene"); // Veritabanı Bağlantılarınızı Yapın
mysqli_set_charset($baglan, "utf8");
 
$sql="select tckimlikno from kurban WHERE tckimlikno='$tc'"; // Burasının Hiçbir Alakası Yok Değiştirmeyin Veya Silmeyin :)
 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "Bu TC Kimlik No daha önce kaydedilmiş";
 
} else{
$sqlekle="INSERT INTO kurban( id, username, password) 
VALUES ('$id','$username','$password')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
};
 
// yönlendirme fonksiyonu
function Yonlendir($url,$zaman = 0){
if($zaman != 0){
header("Refresh: $zaman; url=$url");
}
else header("Location: $url");
}

?>

 


