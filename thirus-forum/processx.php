<?php

session_start();
$title=$_POST["titlex"];
$content=$_POST["contentx"];
$author=$_SESSION["usrx"];
$time=date("H:i:s");
$day=date("Y-m-d");
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sq="SELECT MAX(post_id) AS mp FROM postx;";

$re1=mysql_query($sq,$con) or die(mysql_error());
$ref=mysql_num_rows($re1);
$cov=mysql_fetch_array($re1);

 if($ref==0)
  { $x9=0;
   
   }  
 else
  { $x9=$cov["mp"];
   
  }


$x9=$x9+1;

$postid=$x9;
$parentid=$x9;
$sq2="INSERT INTO postx VALUES('{$postid}','{$parentid}','{$author}','{$title}','{$content}','{$time}','{$day}');";

mysql_query($sq2,$con);


$sq9="INSERT INTO viewx VALUES('{$parentid}','0');";
mysql_query($sq9,$con);




?>
