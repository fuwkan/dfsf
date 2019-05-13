<?php 
 
include("ayar.php");
ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 
$sql_check = mysql_query("select * from admin where username='".$kadi."' and password='".$sifre."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:index.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "";
    }
    else {
        echo "<center><a href=javascript:history.back(-1)>Kullanıcı Adı Veya Şifre Yanlış ( Geri Dön )</a></center>";
    }
}
 
ob_end_flush();
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Fake Script | Admin Panel</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Giriş Yap</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="" method="POST">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="kadi" placeholder="Kullanıcı Adı" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  name="sifre" placeholder="Şifre" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Giriş Yap"></p>

          </fieldset>

        </form>

        

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>