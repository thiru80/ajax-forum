<?php

session_start();
$title=$_POST["titlex"];
$content=$_POST["contentx"];
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
$sq2="INSERT INTO postx VALUES('{$postid}','{$parentid}','{$author}','{$title}','{$content}','{$time}','{$day}','0','0');";
mysql_query($sq2,$con);
   
                        
              $sq31="SELECT * FROM userx WHERE username='{$author}';";
       $count31=mysql_query($sq31,$con) or die(mysql_error());
           
              $count39=mysql_fetch_array($count31);
                   $sq32="SELECT count(*) AS pox FROM postx WHERE username='{$author}';";
              $count32=mysql_query($sq32,$con) or die(mysql_error());
              $count40=mysql_fetch_array($count32);
              
              echo "              <div id='ipost'>
 <table id='tablex2'>     
             
              <tr>
                                <td width='26%' valign='top'>
                               <h3> <a href='prox.php?xf=".$author."'>".$author."</a></h3>
                          <div id='picx' style='text-align:center;'>   <img src='".$count39["picture"]."' height='100' width='120'> </div>
                          <div class='sd2'> 
                       <strong>no.posts : </strong>".$count40["pox"]."<br>
                       <strong>joined : </strong>".$count39["joindate"]."<br>
                        <strong>last visit </strong>: ";

              if(isset($_SESSION["lastd"]))
                 { 
            
                  echo  substr($_SESSION["lastd"],0,-3);
                }

                 echo       "
                          </div>      </td>
                                <td valign='top'>
                                <span class='ix'>".$title."</span><span class='iy'>".substr($time,0,5)." ,".$day."</span>

                           <div class='iz'>
                             <span onclick='zpost(".$postid.",100)' style='color:green;'>
                                     like</span> | <span onclick='zpost(".$postid.",500)' style='color:red;'>
                                     dislike</span>
                           </div>
                                    <br>
                                  <div id='za".$postid."' class='zax'>0 likes 0 dislikes</div>



                                     <hr>
                                     ".$content."
                                </td>
              </tr></table>             </div>";


?>
