<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html> 
      <head>
            <title>thiru's forum</title>
            <link href="styx.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="jquery-1.6.1.min.js"></script>
             <script type="text/javascript" src="checkx.js"></script>
<?php

session_start();



?>
  

   
     </head>
      <body>
         <div id="cz" style="margin-top:40px;text-align:left;">
        
             <div id="header">

                 <div>
                 <img src="leftcurve.jpeg" style="float:left;">
                 <img src="rightcurve.jpeg" style="float:right;">
                 </div>
                  <br>
                           <div style="margin-left:90px;">
                               <img src="sign.jpeg">
    
                               <div id="h">thiru's forum</div>
                           </div>
               
                         <div id="linkx">
                         <ul>
                      <li><a href='signup.php'>sign-up</a></li>
                          
                    <?php
                       
                        if(isset($_SESSION["usrx"])) 
                       { 
                          echo "<li><a href='logout.php'>logout</a></li>";
                          echo "<li><a href='prox.php?xf=".$_SESSION["usrx"]."'>".$_SESSION["usrx"]."</a></li>";
                      }
                         
                     ?>
                        </ul>
                
                        </div>  
                </div>
       <div id="cont">
                 <div id="leftx">
                 <table id="tablex" >
             
     <tr id="tr1x"><td width="50%">TOPICS</td><td>LAST POST</td><td>VIEWS</td><td>REPLIES</td>
</tr>
           <?php

            $con2=mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("thiru");
            $sq5="SELECT * FROM postx WHERE post_id=parent_id ORDER BY parent_id;";
            $res1=mysql_query($sq5,$con2);
            while($row=mysql_fetch_array($res1))
{
               $parent1x=$row["parent_id"];
            
              $sq3="SELECT count(*) FROM postx WHERE parent_id='{$parent1x}' AND parent_id<>post_id ;";

                  $re2=mysql_query($sq3,$con2);
                  $count=mysql_fetch_assoc($re2);
               foreach($count as $name=>$value)
                     {
                    $re6=$value;
                     }
        $sq4="SELECT * FROM postx WHERE post_id=(SELECT MAX(post_id) FROM postx WHERE parent_id='{$parent1x}');";
$re3=mysql_query($sq4,$con2);
while($count2=mysql_fetch_array($re3))
{
$time2=$count2["time"];
$day2=$count2["date"];
$author2=$count2["username"];

}
$sq10="SELECT views FROM viewx WHERE parent_id=".$row["parent_id"].";"; 
$re11=mysql_query($sq10,$con2);
$vs=mysql_fetch_array($re11);
$views=$vs["views"];  
  
             echo    " <tr>
  <td width='60%' style='text-align:left;' ><a href='rex.php?xs=".$row["parent_id"]."' >".$row["title"]."</a><br><span style='font-size:77%'>".substr($row["time"],0,5)." ,".$row["date"]." by <a href='prox.php?xf=".$row["username"]."'>".$row["username"]."</a></span>
                        </td>
                        <td style='text-align:right;font-size:70%;' width='20%' >".substr($time2,0,5)." ,".$day2."<br> by <a href='prox.php?xf=".$author2."'>".$author2." </a></td>
                        <td>".$views."</td>
                        <td >".$re6."</td>
</tr>"   ;
      
       }
             ?>
 
                 </table> 

           
               <?php
                   if(isset($_SESSION["usrx"]))
                   {
                     echo "  <div id='threadx'> 
                         <div id='h3' >
                         
                               <div class='lt'> START THREAD</div>
                          </div>
                    <div id='cthreadx'>
                                  <form >
                             <table>
                                <tr><td align='right'>Title :</td><td><input style='border: 1px inset;' type='text' id='tix' name='titlex'></td><td id='lok1' class='yut'></td></tr>
                                <tr><td valign='top' align='right'>Content :</td><td><textarea style='border: 1px inset;' id='cox' name='contentx' rows='4' cols='50'></textarea></td><td id='lok2' class='yut'></td></tr>
                                 <tr><td colspan='2' align='right'><input type='button' value='submit' onclick='ithread();'></td></tr>



                            </table>
                                  </form>

                     </div>
                             </div>";                                          




                   }
                  else
                      echo "<div id='ct1'><a href='xlogin.php'>login</a> to start a thread</div>";


                ?>


            




                 </div>
                 <div id="rightx">
                               <div id="h2" >
                           <img src="l2.jpeg" style="float:left;">
                             <img src="r2.jpeg" style="float:right;">
                    <?php      if(isset($_SESSION["usrx"]))
                               {

                                 echo "<div class='lt'>user details</div></div>
                               <div id='logbox'>";

                              }
                      
                         else
                              {
              
                                 echo "<div class='lt' >login</div></div>
                               <div id='logbox'>";   
                               }
                             
      
                  if(isset($_SESSION["usrx"]))
               {  


               $usx5=$_SESSION["usrx"];




              $sq31="SELECT joindate,picture FROM userx WHERE username='{$usx5}';";
              $count31=mysql_query($sq31,$con2) or die(mysql_error());
           
              $count39=mysql_fetch_array($count31);
              $sq32="SELECT count(*) AS pox FROM postx WHERE username='{$usx5}';";
              $count32=mysql_query($sq32,$con2) or die(mysql_error());
              $count40=mysql_fetch_array($count32);
                    echo "<span class='lt7'>$usx5</span><br><br>
                         <div id='picx' style='text-align:center;'>  <img src='".$count39["picture"]."' height='100' width='120'>  </div>
                         <div class='sd3'>  
                        <strong>no.posts : </strong>".$count40["pox"]."<br> 
                        <strong>joined : </strong>".$count39["joindate"]."<br>
                        <strong>last visit </strong>: ";
           

         if(isset($_SESSION["lastd"]))
                 { 
                 
                  echo  substr($_SESSION["lastd"],0,-3);
                }
     



        echo   "
                          </div>  ";
                 }        
              else
                 { 
                     echo "<table>";
                    if(isset($_SESSION["x99"]))
                     {
                       if($_SESSION["x99"]==99)
                           echo " 
                     <tr><td  style='color:green'>account created! </td></tr>
                     <tr><td style='color:green'>login now!</td></tr>";
                       $_SESSION["x99"]=400;



                     }

                    if(isset($_SESSION["x0"]))
                    { if($_SESSION["x0"]==90)
                         echo " 
                     <tr><td  style='color:#ed3131'>enter valid username </td></tr>
                            <tr><td style='color:#ed3131'>or password</td></tr>";
                       $_SESSION["x0"]=100;
                    }
             
       
                echo    "   <form method='POST' action='login.php'>     
                             <tr>
                                         <td>
                            username: 
                                         </td>
                             </tr>
                              <tr>
                                          <td>
                            <input type='text' size='19' name='usr'>
                                          </td>
                              </tr>
                              <tr>
                                          <td>
                             password:
                                          </td>
                              </tr>
                              <tr>
                                           <td >
                             <input type='password' size='19' name='pass'>
                                           </td>
                              </tr>
                              <tr>        
                                        
                                            <td align='right'>
                             <input  type='submit' value='login'>
                                            </td>
                              </tr>
                               <tr>
                                            <td style='padding:15px;' align='center'>
                               <a href='signup.php'>create a new account!</a>
                                            </td>
                               </tr> </form>";}  ?>
                      </table>
                            

             
                  
                 
                                </div>
                              
                </div>
        
         </div>
                 <div id="footer">
                     thiru's forum
             
                 </div>
    
        

          </div>

     </body>
  



</html>

