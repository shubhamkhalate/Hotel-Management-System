<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.bu
{
background-color:grey;
margin:10px 5px;
fint-size:10px;
color:white;
padding:5px 20px;
text-decoration:none;
border-radius:5px;
}
.bu:hover
{
background-color:maroon;
}

</style>
</head>
<body>
<div style="width:100%;height:100%;">
<div style="left:10px;top:20px;width:100%;height:15%;background-image:URL('img/bg4.jpg');vsapce=300">
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo.png" align=left height=94px width=135px>
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

<div style="width:60%;height:85%;float:left;hspace:200px;background-image:URL('img/bg6.jpg');">
<form name=f1 method=post >
<table align=center width=40% height=100% border=1 style="border-collapse:collapse;" cellpadding=10px bordercolor=black bgcolor=EEEBEB>
<tr>
<th align=right>Booking Id</th>
<td><input type=text name=txtid id=txtnm  required ></td>
</tr>
<tr>
<th align=right>Name</th>
<td><input type=text name=txtnm id=txtnm pattern="\D+" required></td>
</tr>
<tr>
<th align=right>Contact No</th>
<td><input type=text name=txtcn id=txtcon  required></td>
</tr>

<tr>
<th align=right>Address</th>
<td>
<textarea name=txtadd id=txtadd>
</textarea>
</td>
</tr>



<tr>
<th align=right>Date Of Booking</th>
<td><input type=date name=txtdate></td>
</tr>

<tr>
<th align=right>Time</th>
<td><input type=time name=txttime></td>
</tr>

<tr>
<th align=right>No. Of Table</th>
<td><input type=text name=txtno></td>
</tr>




<tr>
<th align=right><input type=submit name=btnsub value=submit ></th>
<td><input type=reset name=btnres value=Reset >
</td>
</tr>
</table>

</form></div>
<div style="width:40%;height:85%;float:right;background-image:URL('img/tablebook.png');">

</div>



</div>

</body>
</html>
<?php
if(isset($_POST['btnsub']))
{
$tid=$_POST['txtid'];
$num=$_POST['txtnm'];
$cn=$_POST['txtcn'];
$a=$_POST['txtadd'];
$mail=$_POST['txtdate'];
$u=$_POST['txttime'];
$p=$_POST['txtno'];

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="insert into tablebook values('$tid','$num','$cn','$a','$mail','$u','$p')";
mysql_query($q);
echo"<script>alert('booking successfully');</script>";
mysql_close($cn);
}
?>