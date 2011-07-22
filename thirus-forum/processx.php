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

echo " <tr><td width='60%' style='text-align:left;' ><a href='rex.php?xs=".$parentid."'>".$title."</a><br><span style='font-size:77%'>".substr($time,0,5)." ,".$day." by <a href='prox.php?xf=".$author."'>".$author."</a></span></td><td style='text-align:right;font-size:70%;' width='20%' >".substr($time2,0,5)." ,".$day2."<br> by<a href='prox.php?xf=".$author2."'> ".$author2."</a></td><td>0</td><td >".$re5."</td>
</tr>";

?>
