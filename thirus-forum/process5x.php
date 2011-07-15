<?php
session_start();

$coni=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$namex=$_FILES["file"]["name"];
$usname=$_SESSION["usrx"];
$filtype=$_FILES["file"]["type"];
if(($filtype=="image/jpeg")||($filtype=="image/gif")||($filtype=="image/png"))
{
               if (($_FILES["file"]["size"]/1024) < 1024)
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
      $_SESSION["psizex"]="100";
      


                   }
}
else
{
   $_SESSION["psizex"]="150";
}

header("location:prox.php?xf=".$usname)


?> 



