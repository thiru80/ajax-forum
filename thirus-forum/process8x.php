<?php
 session_start();
 $con7=mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("thiru");
$sw89="SELECT count(*) AS sumz FROM postx WHERE post_id=parent_id;";
$rew1=mysql_query($sw89,$con7);
$sed=mysql_fetch_array($rew1);

 echo $sed["sumz"];

?>
