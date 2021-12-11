<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
<div style="width:100%;height:100%;">
<div style="left:10px;top:20px;width:100%;height:20%;background-image:URL('img/bg4.jpg');vsapce=300">
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo.png" align=left height=120px width=135px>
<center><i>Welcome Hotel City Inn </i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div style="width:100%;height:70%;float:center;background-image:URL('img/bg2.jpg');">
<a href="order.php">back</a>
<h1 align=center>Order Insert</h1><font size=150px>
<center>
<form method="post" class="frm" >
<table align=center width=50% height=80%>
<tr>

<td><h3>table no</h3></td><td><input type=text name=txtno  required><br></td></tr>
<tr><td><h3>item</h3></td><td><input type=text name=txtim required><br></td></tr>

<tr><td><h3>Section</h3></td><td><input type=radio name=txtsec value=veg>veg
      <input type=radio name=txtsec value=non veg>Non-veg<br></td></tr>
<tr>
<td><h3>Type</h3></td>
<td>
  <select name=txtty>
<option value="">--select--</option>
<option value="Maharashtrian">Maharashtrian</option><option value="Rajsthani">Rajsthani</option>

<option value="Hydrabadi">Hydrabadi</option>
<option value="Chinese">Chinese</option>
<option value="Cold Drink">Cold Drink</option>
<option value="south indian">South Indian</option>

</select>
</td>
</tr>
<tr><td><h3>quantity</h3></td><td><input type=text name=txtqu ><br></td></tr>
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
$nm=$_POST['txtno'];
$it=$_POST['txtim'];
$ve=$_POST['txtsec'];
$ty=$_POST['txtty'];
$qt=$_POST['txtqu'];

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="insert into waiter values('$nm','$it','$ve','$ty','$qt')";
mysql_query($q);
echo"<script>alert('order place ');</script>";
mysql_close($cn);
}
?>