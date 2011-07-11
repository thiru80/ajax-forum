<?php

session_start();


if(isset($_POST["usr"]))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("thiru");
  $x1=$_REQUEST["usr"];
   $x2=$_REQUEST["pass"];
   $sq="SELECT * FROM info WHERE username='{$x1}' AND password=PASSWORD('{$x2}');";
   $re=mysql_query($sq,$con);
   $x5=mysql_num_rows($re);
      if($x5==1)
      {
           $_SESSION["usrx"]=$x1;
           

       }
     else
        {
          $_SESSION["x0"]=90;

         }
    

     
}

if(isset($_SESSION["usrx"]))
{
$usx=$_SESSION["usrx"];
$squ="SELECT last FROM userx WHERE username='{$usx}';";
$county=mysql_query($squ,$con) or die(mysql_error());
$ty=mysql_fetch_array($county);
$_SESSION["lastd"]=$ty["last"];

if(isset($_SESSION["lastd"]))
{
$lx=date("Y-m-d H:i:s");
$sqp="UPDATE userx SET last='{$lx}' WHERE username='{$usx}' ;";
mysql_query($sqp,$con) or die(mysql_error());
}
}

header("location:index.php");

?>
  
