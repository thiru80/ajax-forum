<?php

session_start();

$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("thiru");
$sq="SELECT MAX(post_id) AS xc FROM postx;";
$re1=mysql_query($sq,$con);

$rodj=mysql_fetch_array($re1);

$x9=$rodj["xc"];
$postid=$x9;
$parentid=$_REQUEST["dtas"];
$sq54="SELECT * FROM postx WHERE post_id='{$postid}' ;";
$rtu=mysql_query($sq54,$con);
$rtu7=mysql_fetch_array($rtu);

$title=$rtu7["title"];
$content=$rtu7["content"];
$author=$rtu7["username"];
$time=$rtu7["time"];
$day=$rtu7["date"];
  


                        
              $sq31="SELECT * FROM userx WHERE username='{$author}';";
       $count31=mysql_query($sq31,$con) or die(mysql_error());
           
              $count39=mysql_fetch_array($count31);
                   $sq32="SELECT count(*) AS pox FROM postx WHERE username='{$author}';";
              $count32=mysql_query($sq32,$con) or die(mysql_error());
              $count40=mysql_fetch_array($count32);
              if(isset($_SESSION["lastd"]))
                {
                    $espk=$_SESSION["lastd"];
                 }
              else
                {    $espk=$count39["last"];
                }

            $ed2= array(
              
                  "author"=>$author,
                   "picture"=>$count39["picture"],
                  "posts"=>$count40["pox"],
                   "joined"=>$count39["joindate"],
                   "last"=>substr($espk,0,-3),
                   "title"=>$title,
                   "time"=>substr($time,0,5),
                   "day"=>$day,
                   "postid"=>$postid,
                   "content"=>$content,


                       );
            echo (json_encode($ed2));
              
            


?>
