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

$xparent=$_GET["xs"];

?>
 
   
     </head>
      <body>
         <div id="cz" style=" margin-top:40px;text-align:left;">
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
                            <li><a href="index.php">threads</a> </li>
                            <li><a href='signup.php'> sign-up </a></li> 
                       <?php        if(!isset($_SESSION["usrx"]))
                          {
                         echo  " <li><a href='xlogin.php'> login </a></li> 
                                  ";   }
                         else
                           {
                          echo  "<li><a href='logout.php'> logout </a></li>";
                          echo "<li><a href='prox.php?xf=".$_SESSION["usrx"]."'>".$_SESSION["usrx"]."</a></li>";   
                                      }
                         ?>
                     
                        </ul>
                
                        </div>  
                </div>
        <div id="cont" style="padding:20px;margin-bottom:200px;">
                 
                <div id="r13" >
            <div id="h3" >
                         
                  <div class="lt"> <?php echo "THREAD CODE ".$xparent  ?></div>
                </div>
               
                <div id="inx2"><div id="inz">
         <?php     
             
              $_SESSION["xparent1"]=$_GET["xs"];
              $conz=mysql_connect("localhost","root","") or die(mysql_error());
              mysql_select_db("thiru");
              $sq7="SELECT * FROM postx WHERE parent_id='{$xparent}' ORDER BY post_id;";
              $re7=mysql_query($sq7,$conz);
             
              while($row=mysql_fetch_array($re7))
               {

               $ed=$row['username'];
              $sq31="SELECT joindate,last,picture FROM userx WHERE username='{$ed}';";
              $count31=mysql_query($sq31,$conz) or die(mysql_error());
           
              $count39=mysql_fetch_array($count31);
              $sq32="SELECT count(*) AS pox FROM postx WHERE username='{$ed}';";
              $count32=mysql_query($sq32,$conz) or die(mysql_error());
              $count40=mysql_fetch_array($count32);

              
              echo "
                    <div id='ipost'>
 <table id='tablex2'>              <tr>
                            <td  valign='top'>
                               <h3> <a href='prox.php?xf=".$row['username']."'>".$row['username']."</a></h3>
                           <div id='picx' style='text-align:center;'>  <img src='".$count39["picture"]."' height='100' width='120'>  </div>
                          <div class='sd2'>  
                        <strong>no.posts : </strong>".$count40["pox"]."<br> 
                        <strong>joined : </strong>".$count39["joindate"]."<br>
                        <strong>last visit </strong>: ";
            
            $sq2="SELECT count(*) AS numy FROM likex WHERE stat='1' AND post_id=".$row["post_id"].";";
            $sq3="SELECT count(*) AS numo FROM likex WHERE stat='0' AND post_id=".$row["post_id"].";";
            $count43=mysql_query($sq2,$conz) or die(mysql_error());
            $count44=mysql_query($sq3,$conz) or die(mysql_error());
            $res90=mysql_fetch_array($count43);
            $res91=mysql_fetch_array($count44);
           
                 if(isset($_SESSION["usrx"]))      
                   {
                  if($_SESSION["usrx"]==$row["username"])      
                     echo substr($_SESSION["lastd"],0,-3); 
                  else
                     echo  substr($count39["last"],0,-3);
                }
            else
                

          { echo  substr($count39["last"],0,-3);}
                   echo"   </div>      </td>
                                <td valign='top' width='74%'>
                                <span class='ix'>".$row['title']."</span><span class='iy'>".substr($row['time'],0,5)." ,".$row['date']." </span>";
                        
                if(isset($_SESSION["usrx"]))
                       {    
                      echo "
             
                           <div class='iz'>
                             <span onclick='zpost(".$row["post_id"].",100)' style='color:green;'>
                                     like</span> | <span onclick='zpost(".$row["post_id"].",500)' style='color:red;'>
                                     dislike</span>
                           </div> ";

                      }

                 echo "
                                    <br>
                                  <div id='za".$row["post_id"]."' class='zax'>".$res90["numy"]." likes ".$res91["numo"]." dislikes</div>
                                     <hr>
                                     ".$row['content']."
                                </td> </tr>
 </table>             </div>
              
               "; 
               
                 } echo "</div>";
          
             $sq10="SELECT views FROM viewx WHERE parent_id='{$xparent}';"; 
             $re11=mysql_query($sq10,$conz);
             $vs=mysql_fetch_array($re11);
             $views=$vs["views"]; 
             $x11=$views+1; 
             $sq11="UPDATE viewx SET views=$x11 WHERE parent_id='{$xparent}';";    
             mysql_query($sq11,$conz);  
          
                   if(isset($_SESSION["usrx"]))
                   {
                     echo "  <div id='threadx' style='margin-right:2px;margin-bottom:2px;' > 
                         <div id='h3' >
                         
                               <div class='lt'> REPLY</div>
                          </div>
                    <div id='cthreadx'>
                                  <form >
                             <table>
                                <tr><td align='right'>Title :</td><td><input style='border: 1px inset;' type='text' id='tix' name='titlex'></td><td id='lok1' class='yut'></td></tr>
                                <tr><td valign='top' align='right'>Content :</td><td><textarea style='border: 1px inset;' id='cox' name='contentx' rows='4' cols='80'></textarea></td><td id='lok2' class='yut'></td></tr>
                                 <tr><td colspan='2' align='right'><input type='button' value='submit' onclick='ithread2();'></td></tr>



                            </table>
                                  </form>

                     </div>
                             </div>";                                          




                   }
                  else
                      echo "<div id='ct1' ><a href='xlogin.php'>login</a> to reply</div>";


  ?>


  
            
                </div>   
                </div>
                 
  
                
                 
         </div>
                 <div id="footer">
             thiru's forum
                 </div>
          </div>

     </body>
  



</html>

