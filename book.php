<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="select * from tablebook ";
$rs=mysql_query($q);
$u="";
$pid="";
$pnm="";
$pr="";
$qty="";

$un="";
$co="";
if($a=mysql_fetch_array($rs))
{
$u=$a['bookid'];

$pid=$a['name'];
$pnm=$a['contactno'];
$pr=$a['address'];
$qty=$a['date'];
$nm=$a['time'];
$co=$a['table no'];

}
?>
