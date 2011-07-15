<?php

session_start();
$postid1=$_POST["postq"];
$checsx=$_POST["stat"];
$conx=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
if($checsx==100)
{
 $sq="SELECT likes,dislikes FROM postx WHERE post_id='{$postid1}';";
 $rew=mysql_query($sq,$conx) or die(mysql_error());
 $count65=mysql_fetch_array($rew);
 $res1=$count65["likes"]+1;
 $sq2="UPDATE postx SET likes='{$res1}' WHERE post_id='{$postid1}';";
 mysql_query($sq2,$conx) or die(mysql_error());
 echo $res1." likes ".$count65["dislikes"]." dislikes";
}
if($checsx==500)
{
 $sq3="SELECT likes,dislikes FROM postx WHERE post_id='{$postid1}';";
 $rew2=mysql_query($sq3,$conx) or die(mysql_error());
 $count66=mysql_fetch_array($rew2);
 $res2=$count66["dislikes"]+1;
 $sq4="UPDATE postx SET dislikes='{$res2}' WHERE post_id='{$postid1}';";
 mysql_query($sq4,$conx) or die(mysql_error());
 echo $count66["likes"]." likes ".$res2." dislikes";
}



?>
