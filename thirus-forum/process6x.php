<?php
session_start();
$usx=$_SESSION["usrx"];
$oldx=$_POST["oldx"];
$newp=$_POST["pasx"];
$conb=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sqd="SELECT count(*) AS numx FROM info WHERE username='{$usx}' AND password=PASSWORD('{$oldx}');";
$res49=mysql_query($sqd,$conb) or die(mysql_error());
$count67=mysql_fetch_array($res49);
if($count67["numx"]==1)
{
$sqw="UPDATE info SET password=PASSWORD('{$newp}') WHERE username='{$usx}';";
mysql_query($sqw,$conb) or die(mysql_error());
echo "<span style='color:green;font-size:70%;'>password changed!</span>";



}
else
{
echo "<span class='yut'>wrong old password! password not changed!</span>";

}

?>
