<?php

session_start();
$postid1=$_POST["postq"];
$checsx=$_POST["stat"];
$usrname=$_SESSION["usrx"];
$conx=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
if($checsx==100)
{
 $sq="INSERT INTO likex VALUES('{$usrname}','{$postid1}','1');";
 mysql_query($sq,$conx) or die(mysql_error());

}
if($checsx==500)
{
$sq9="INSERT INTO likex VALUES('{$usrname}','{$postid1}','0');";
 mysql_query($sq9,$conx) or die(mysql_error());
}

 $sq2="SELECT count(*) AS numy FROM likex WHERE stat='1'AND post_id='{$postid1}';";
 $sq3="SELECT count(*) AS numo FROM likex WHERE stat='0' AND post_id='{$postid1}';";
 $count43=mysql_query($sq2,$conx) or die(mysql_error());
 $count44=mysql_query($sq3,$conx) or die(mysql_error());
 $res90=mysql_fetch_array($count43);
 $res91=mysql_fetch_array($count44);
 echo $res90["numy"]." likes ".$res91["numo"]." dislikes";


?>
