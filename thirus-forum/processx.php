<?php

session_start();
$title=$_REQUEST["titlex"];
$content=$_REQUEST["contentx"];
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
$sq3="SELECT count(*) FROM postx WHERE parent_id='{$parentid}' AND parent_id<>post_id;";

$re2=mysql_query($sq3,$con);
$count=mysql_fetch_assoc($re2);
foreach($count as $name=>$value)
{
 $re5=$value;
}

$sq4="SELECT * FROM postx WHERE post_id=(SELECT MAX(post_id) FROM postx WHERE parent_id='{$parentid}');";
$re3=mysql_query($sq4,$con);
while($count2=mysql_fetch_array($re3))
{
$time2=$count2["time"];
$day2=$count2["date"];
$author2=$count2["username"];
}
$sq9="INSERT INTO viewx VALUES('{$parentid}','0');";
mysql_query($sq9,$con);

$ed= array(
"parentid"=>$parentid,
 "title"=>$title,
  "time1"=>substr($time,0,5),
   "time2"=>substr($time2,0,5),
    "day"=>$day,
    "day2"=>$day2,
    "author"=>$author,
    "author2"=>$author2,
    "re5"=>$re5,
   );
echo (json_encode($ed));


?>
