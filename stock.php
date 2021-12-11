<html>
<head>
</head>

<body>
<div style="width:100%;height:80%;background-image:URL('img/pl.jpg');">
<center>
<?php
{
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);

$q="select * from waiter";
mysql_query($q);
$result=mysql_query($q);
?>
<br><br>
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