<?php
session_start();
$conj=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$ref=$_SESSION["usrx"];
$srd="SELECT count(*) AS numf FROM likex WHERE username='{$ref}' AND post_id=".$_POST["posty"].";";
$cod=mysql_query($srd,$conj) or die(mysql_error());
$res98=mysql_fetch_array($cod);
if($res98["numf"]!=0)
{
 
 echo "0";

}
else
 echo "1";








?>
