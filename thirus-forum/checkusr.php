<?php
session_start();
$cef1=$_POST["rep1"];
$conv=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sq90="SELECT count(*) AS tot FROM userx WHERE username='{$cef1}';";
$count78=mysql_query($sq90,$conv) or die(mysql_error());
$count07=mysql_fetch_array($count78);
if($count07["tot"]!=0)
{
echo "1";

}
else
{

echo "0";
}

















?>
