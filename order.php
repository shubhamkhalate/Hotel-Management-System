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
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a>
</div>
</div>
<div width=100% height=70%>
<br>
<center><a href=water.php>nnn</a>
<h2>Table Booking From Customer</h2></center>
<hr>
<table cellspacing=2px cellpadding=10px style="background-image:URL('img/ls.jpg')"align=center border=3px solid black>
<tr>
 <th></th>
<th>Book Id</th>
<th>Name</th>
<th>Contact No</th>
<th>Address</th>
<th>Date</th>
<th>Time</th>
<th>Table No</th></tr>
<?php
session_start();
if(!isset($_SESSION['bookid']))
{
}
?>

<?php

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="select * from tablebook ";
$rs=mysql_query($q);
while($a=mysql_fetch_array($rs))
{
$u2=$a['bookid'];
$pid=$a['name'];
$pnm=$a['contactno'];
$pr=$a['address'];
$qty=$a['date'];
$un=$a['time'];
$co=$a['table no'];

echo "<tr>";
 echo "<td><a href=book.php?><input type=button name=btnsub value=Accept></a></td>
<td>$u2</td><td>$pid</td><td>$pnm</td><td>$pr</td><td>$qty</td>
<td>$un</td><td>$co</td>";
echo "</tr>";
}
mysql_close($cn);
?>
</div>
</div>
</body>
</html>
