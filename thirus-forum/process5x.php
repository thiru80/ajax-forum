<?php
session_start();

$coni=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$namex=$_FILES["file"]["name"];
$usname=$_SESSION["usrx"];
if ($_FILES["file"]["size"] < 1000000)
  {
      
      if(move_uploaded_file($_FILES["file"]["tmp_name"],
      $namex))
          {     $sqo="UPDATE userx SET picture='{$namex}' WHERE username='{$usname}';";
                mysql_query($sqo,$coni) or die(mysql_error());
              $_SESSION["psizex"]="0";
          }
       else
          {
            $_SESSION["psizex"]="50";


          }
   
      

  }
else
  {
      $_SESSION["psizex"]="50";


   }

header("location:prox.php?xf=".$usname);
?> 



