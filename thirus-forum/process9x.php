<?php

session_start();

$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sq="SELECT MAX(parent_id) AS mp FROM postx;";
$re1=mysql_query($sq,$con) or die(mysql_error());
$ref=mysql_num_rows($re1);
$cov=mysql_fetch_array($re1);
 $x9=$cov["mp"];
$postid=$x9;
$parentid=$x9;
$sq54="SELECT * FROM postx WHERE post_id='{$postid}' ;";
$rtu=mysql_query($sq54,$con);
$rtu7=mysql_fetch_array($rtu);



$title=$rtu7["title"];
$content=$rtu7["content"];
$author=$rtu7["username"];
$time=$rtu7["time"];
$day=$rtu7["date"];
$sq3="SELECT count(*) FROM postx WHERE parent_id='{$parentid}' AND parent_id<>post_id;";

$re2=mysql_query($sq3,$con);
$count=mysql_fetch_assoc($re2);
foreach($count as $name=>$value)
{
 $re5=$value;
}

$sq4="SELECT * FROM postx WHERE post_id=(SELECT MAX(post_id) FROM postx WHERE parent_id='{$parentid}');";
$re3=mysql_query($sq4,$con);
$count2=mysql_fetch_array($re3);
$time2=$count2["time"];
$day2=$count2["date"];
$author2=$count2["username"];

$sq9="SELECT * FROM viewx WHERE parent_id='{$parentid}';";
$eas=mysql_query($sq9,$con);
$res=mysql_fetch_array($eas);

$ed= array(
"parentid"=>$parentid,
 "title"=>$title,
  "time1"=>substr($time,0,5),
   "time2"=>substr($time2,0,5),
    "day"=>$day,
    "day2"=>$day2,
    "author"=>$author,
    "author2"=>$author2,
     "views"=>$res["views"],
    "re5"=>$re5,
   );
echo (json_encode($ed));


?>
