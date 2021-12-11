<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
<div style="width:100%;height:100%;">
<div style="left:10px;top:20px;width:100%;height:20%;background-image:URL('img/bg4.jpg');vsapce=300">
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo.png" align=left height=128px width=135px>
<center><i>Welcome Hotel City Inn </i><br></center>

</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a>

</div>
</div>
<div style="float:left;width:100%;height:80%;background-image:URL('img/pl.jpg');">
<a href="inventory.php">aa</a><center>

<h3>Orders From Customers</h3>
<?php
{
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);

$q="select * from waiter";
mysql_query($q);
$result=mysql_query($q);
?>
<br>
<table align=center width=60%  border=1px dotted #4d0026>
<tr>
<th align=center><h3>Item Name</h3></th>
 <th align=center><h3>Quantity</h3></th>
</tr>
<?php
while($a=mysql_fetch_array($result))
{
$num=$a['item'];
$bk=$a['quantity'];

echo"<tr>";

echo"<td align=center><h3>$num</h3></td>";
echo" <td align=center><h3>$bk</h3></td>";

echo"</tr>";

}
echo"</table>";

mysql_close($cn);
}
?>
</center>


</div>

</div>
</body>
</html>