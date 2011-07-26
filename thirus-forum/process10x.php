<?php
session_start();
  $xparent=$_POST["dtas"];
  $conz=mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("thiru");
  $sw89="SELECT count(*) AS sumz FROM postx WHERE parent_id='{$xparent}';";
  $rew1=mysql_query($sw89,$conz);
  $sed=mysql_fetch_array($rew1);
  echo $sed["sumz"];
             

?>
