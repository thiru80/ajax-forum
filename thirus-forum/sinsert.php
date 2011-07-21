<?php
session_start();
$y1=$_POST["susrx"];
$y2=$_POST["semail"];
$y3=$_POST["sgender"];
$y4=$_POST["spass"];
$y5=$_POST["sday"];
$y6=$_POST["smonth"];
$y7=$_POST["syear"];
$y9=date("Y-m-d");
$y11=date("Y-m-d H:i:s");
$y8=$y7."-".$y6."-".$y5;
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sa="INSERT INTO info VALUES('{$y1}',PASSWORD('{$y4}'));";
$sw="INSERT INTO userx(username,gender,name,birthday,occupation,interest,location,email,picture,joindate,last) 
VALUES('{$y1}','{$y3}','N/A','{$y8}','N/A','N/A','N/A','{$y2}','na.jpeg','{$y9}','{$y11}');";
mysql_query($sa,$con) or die(mysql_error());
mysql_query($sw,$con) or die(mysql_error());
$_SESSION["x99"]=99;


header("location:index.php");
?>
