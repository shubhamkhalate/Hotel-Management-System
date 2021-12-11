<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
<div style="width:100%;height:100%;">
<div style="left:10px;top:20px;width:100%;height:20%;background-image:URL('img/bg4.jpg');vsapce=300">
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo.png" align=left height=125px width=135px>
<center><?php
session_start();
if(!isset($_SESSION['username']))
{
echo header("location:user.php");
}
?>
Welcome 
<?php
echo $_SESSION['username'];
echo " To Hotel City Inn";
?>

</center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div width=100% height=70% style="float:center">
<center><h1>Profile</h1></center>
<hr>
<?php
$u=$_SESSION['username'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="select * from register where username='$u'";
$rs=mysql_query($q);
if($a=mysql_fetch_array($rs))

{
$un=$a['name'];
$co=$a['contactno'];
$gen=$a['address'];
$em=$a['emailid'];
echo "<br><center><h3>Name :$un<br><br>Contact No :$co<br><br>
Address :$gen<br><br>Email Id :$em<br><br></b></h3></center>";

}
mysql_close($cn);
?>
</center>&nbsp;&nbsp;

</div>
</body>
</html>