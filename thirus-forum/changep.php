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
         <div id="cz" style=" margin-top:40px;height:800px;text-align:left;">
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
                             <?php        if(isset($_SESSION["usrx"]))
                                         {
                          echo  "<li><a href='logout.php'> logout </a></li>";
                          echo "<li><a href='prox.php?xf=".$_SESSION["usrx"]."'>".$_SESSION["usrx"]."</a></li>";   
                                          }
                         ?>
                     
                     
                     
                        </ul>
                
                        </div>  
                </div>
        <div id="cont" style="text-align:center;">
                 <div id="centx" >
                <div id="r12">
            <div id="h3" >
                         
                  <div class="lt"> CHANGE PASSWORD </div>
                </div>
               
                <div id="xcv">
                         
                 <form>     
                       <table style="margin-left:50px;">
                          <tr>
          <td align="right">  Old Password :</td><td><input type="password" id="oldpassx"></td>
                 </tr>
                         <tr>
 
        <td align="right">  New Password :</td><td><input type="password" id="spassx"  onblur="scheck2()"></td><td id="passer" class="yut"></td>
                 </tr>
                   <tr>
 
      <td align="right">  Confirm new Password :</td><td><input type="password" id="spassx2" onblur="scheck()"></td>
                 </tr>
                  <tr><td colspan="2" align="right"><input type="button" value="submit" onclick='chanp()'> </td></tr>
                   <tr><td colspan="2" id="changf"></td></tr>
                         </table>         </form>
                </div>   
                </div>
                 
  
                 </div>
            
         </div>
                 <div id="footer2">
                   thiru's forum
                 </div>
          </div>

     </body>
  



</html>
