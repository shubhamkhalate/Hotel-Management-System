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
<div style="width:100%;height:30%;background-image:URL('img/bg6.jpg');">
<center><table width=60% height=60% hspace=px vspace=0px><br>
<tr>
<td>
<img src=img/userdetail.jpg height=130px width=140px>
</td>

<td>
<img src=img/tb.jpeg height=130px width=155px>
</td>
<td>
<img src=img/logout.jpg height=130px width=130px>
</td>
</tr>
<tr>
<td> <a href="userdetail.php"><input type=button  value=MyDetails></a></td>
<td> &nbsp;&nbsp;&nbsp;<a href="table.php"><input type=button  value=BookTable></a></td>
<td> &nbsp;&nbsp;<a href="logout.php"><input type=button  value=LogOut ></a></td>
</tr>
</table>
</div>


</div>

</body>
</html>