<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("hotel",$cn);
$q="select * from tablebook ";
$rs=mysql_query($q);
$tid="";
$num="";
$cn="";
$a="";
$mail="";
$u="";
$p="";

if($a=mysql_fetch_array($rs))
{
$tid=$a['bookid'];
$num=$a['name'];
$cn=$a['contactno'];
$a=$a['address'];
$mail=$a['date'];
$u=$a['time'];
$p=$a['table no'];
}
?>