<?php

session_start();
$title=$_REQUEST["titlex"];
$content=$_REQUEST["contentx"];
$author=$_SESSION["usrx"];
$time=date("H:i:s");
$day=date("Y-m-d");
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sq="SELECT MAX(post_id) AS xc FROM postx;";
$re1=mysql_query($sq,$con);
$ref=mysql_num_rows($re1);
$rodj=mysql_fetch_array($re1);

 if($ref==0)
  { $x9=0;
   }  
 else
  { $x9=$rodj["xc"];
  }

$x9=$x9+1;
$postid=$x9;
$parentid=$_SESSION["xparent1"];
$sq2="INSERT INTO postx VALUES('{$postid}','{$parentid}','{$author}','{$title}','{$content}','{$time}','{$day}');";
mysql_query($sq2,$con);
   
                        
              $sq31="SELECT * FROM userx WHERE username='{$author}';";
       $count31=mysql_query($sq31,$con) or die(mysql_error());
           
              $count39=mysql_fetch_array($count31);
                   $sq32="SELECT count(*) AS pox FROM postx WHERE username='{$author}';";
              $count32=mysql_query($sq32,$con) or die(mysql_error());
              $count40=mysql_fetch_array($count32);


            $ed2= array(
              
                  "author"=>$author,
                   "picture"=>$count39["picture"],
                  "posts"=>$count40["pox"],
                   "joined"=>$count39["joindate"],
                   "last"=>substr($_SESSION["lastd"],0,-3),
                   "title"=>$title,
                   "time"=>substr($time,0,5),
                   "day"=>$day,
                   "postid"=>$postid,
                   "content"=>$content,


                       );
            echo (json_encode($ed2));
              
            


?>
