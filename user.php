<?php
session_start();
?>
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
<center><i>Welcome Hotel City Inn </i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div style="float:left;width:40%;height:75%;background-image:URL();">

<img src="img/customer.png"  height=480px width=550px>

</div>
<div style="float:left;width:60%;height:85%;background-image:URL('img/pl.jpg');">
<br><center><h1>Welcome Customer </h1></center><br>
<center><form name=f1 id=f1 method="post" action="">
<fieldset style="border-radius:7px;width:70%;height:50%;">
<legend><h2>User Login Here</h2></legend>
<br><input type=text name=txtnm id=txtnm placeholder="enter your name" pattern="\D+" required ><br><br>
<input type=password name=txtps id=txtps placeholder="enter your password" required ><br><br>
<input type=submit value=login class=button name=btnlog><br><br>
<br>
<center>
<a href="register.php"><font size=5>Register Here</font></a>
</center>
</fieldset>
</form>
</center>

</div>
</div>
</body>
</html>
<?php
$cn=mysqli_connect("localhost","root");
$db=mysqli_select_db("hotel",$cn);
if(isset($_POST["btnlog"]))
{
$u=$_POST["txtnm"];
$p=$_POST["txtps"];
$q="select * from register where username='$u' and password='$p'";
$result=mysqli_query($q);
if($a=mysqli_fetch_array($result))
{
$_SESSION['username']=$u;
echo header("location:login.php");
}
else
{
echo"<script>alert('Incorrect Username or Password')</script>";
mysqli_close($cn);
}
}
?>