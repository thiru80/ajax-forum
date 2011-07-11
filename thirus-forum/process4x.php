<?php
session_start();
$valx=$_POST["valx"];
$namex=$_POST["namex"];
$usrname=$_SESSION["usrx"];
$coni=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sqe="UPDATE userx SET ".$namex."= '{$valx}' WHERE username='{$usrname}';";
mysql_query($sqe,$coni) or die(mysql_error());
echo $valx;



?>
