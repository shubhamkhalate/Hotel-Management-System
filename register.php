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
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a>

</div>
</div>
<div style="width:100%;height:80%;float:center;background-image:URL('img/bg2.jpg');">

<h1 align=center>Customer Registration</h1>
<center>
<form method="post" class="frm">
<table align=center width=50% height=100%>
<tr>
<td><h3>Name</h3></td><td><input type=text name=txtnm  required><br></td></tr>
<tr><td><h3>Contact no</h3></td><td><input type=text name=txtcn required><br><tr><td><h3>Address</h3></td><td><textarea input type=text name=txtadd required></textarea><br></td></tr>
<tr><td><h3>Email Id
</h3></td><td><input type=mail name=txtmail required><br></td></tr>
<tr><td><h3>Username</h3></td><td><input type=text name=txtuser><br></td></tr>
<tr><td><h3>Password</h3></td><td><input type=text name=txtpass ><br></td></tr>
<tr><td colspan=2>&nbsp;&nbsp;&nbsp;<center><input type=submit value=submit class=submit name=btnsub></center></td></tr>
</table>
</form>
</center>
</font>


</div>
</div>
</body>
</html>
<?php
if(isset($_POST['btnsub']))
{
$num=$_POST['txtnm'];
$cn=$_POST['txtcn'];
$a=$_POST['txtadd'];
$mail=$_POST['txtmail'];
$u=$_POST['txtuser'];
$p=$_POST['txtpass'];

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="insert into register values('$num','$cn','$a','$mail','$u','$p')";
mysql_query($q);
echo"<script>alert('registration is successfully');</script>";
mysql_close($cn);
}
?>