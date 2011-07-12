<html> 
      <head>
            <title>thiru's forum</title>
            <link href="styx.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="checkx.js"></script>

<?php

session_start();

$proname=$_GET["xf"];


?>
  

   
     </head>
      <body>
         <div id="cz" style=" margin-top:40px;text-align:left;height:800px;">
        
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

            <div id="conpx" style="text-align:center;">
                <div id="conpx2" style="text-align:left;">
                <?php
                      $pol=0;
                      $conu=mysql_connect("localhost","root","") or die(mysql_error());
                      mysql_select_db("thiru");
                      $sqw="SELECT * FROM userx WHERE username='{$proname}';";
                      $count62=mysql_query($sqw,$conu) or die(mysql_error());
                      $count72=mysql_fetch_array($count62);
                      $sq32="SELECT count(*) AS postsx FROM postx WHERE username='{$proname}';";
                      $count32=mysql_query($sq32,$conu) or die(mysql_error());
                      $count40=mysql_fetch_array($count32);
                     
                   if(isset($_SESSION["usrx"]))
                       {
                               
                            if($_SESSION["usrx"]==$proname)
                               {

                   echo   "<span class='yif'>username</span> : <span class='ix'>".$count72["username"]."</span><hr>     
                               <span class='yif'>about ".$count72["username"]."</span>
                              <table class='tabv'>
                              <tr><td class='tab4'><span class='cj'>name  </span><div id='n1'>
                              <span id='y1'> ".$count72["name"]." </span> <span class='der' onclick=disp('#n1','#m1')> edit</span>
                                                            </div><span id='m1' class='inv'>
                                               <input id='z1' type='text'>
                                               <input type='button' value='save' onclick=ediu('1','name')>
                                               <input type='button' value='cancel' onclick=canu('#n1','#m1')>                                        
                                                                       </span>
                              </td></tr>
                              <tr><td class='tab4'><span class='cj'>occupation  </span><div id='n2' >
                              <span id='y2'>".$count72["occupation"]." </span> <span class='der' onclick=disp('#n2','#m2')> edit</span>
                                                                </div><span id='m2' class='inv'>
                                               <input id='z2' type='text'>
                                               <input type='button' value='save' onclick=ediu('2','occupation')>
                                               <input type='button' value='cancel' onclick=canu('#n2','#m2')>                                        
                                                                       </span>
                              </td></tr>
                              <tr><td class='tab4'><span class='cj'>gender  </span><div id='n3'>
                              <span id='y3'>".$count72["gender"]." </span> <span class='der' onclick=disp('#n3','#m3')> edit</span>
                                                            </div><span id='m3' class='inv'>
                                               <select id='z3'>
                                                    <option value='0'>select gender:</option>
                                                    <option value='male'>male</option>
                                                    <option value='female'>female</option>

                                               </select>
                                               <input type='button' value='save' onclick=ediu('3','gender')>
                                               <input type='button' value='cancel' onclick=canu('#n3','#m3')>                                        
                                                                       </span>
                               </td><td id='q3' class='yut'></td></tr>
                              <tr><td class='tab4'><span class='cj'>location  </span><div id='n4'>
                              <span id='y4'>".$count72["location"]." </span> <span class='der' onclick=disp('#n4','#m4')> edit</span>
                                                             </div><span id='m4' class='inv'>
                                               <input id='z4' type='text'>
                                               <input type='button' value='save' onclick=ediu('4','location')>
                                               <input type='button' value='cancel' onclick=canu('#n4','#m4')>                                        
                                                                       </span>
                               </td></tr>
                               <tr><td class='tab4'><span class='cj'>birthday </span> <div id='n5'>
                               <span id='y5'>".$count72["birthday"]." </span> <span class='der' onclick=disp('#n5','#m5')> edit</span>
                                                              </div><span id='m5' class='inv'>
                                               




            <select id='z51'>
<option value='0'>Day:</option>
<option value='1'>1</option> 
<option value='2'>2</option> 
<option value='3'>3</option> 
<option value='4'>4</option> 
<option value='5'>5</option> 
<option value='6'>6</option> 
<option value='7'>7</option> 
<option value='8'>8</option> 
<option value='9'>9</option> 
<option value='10'>10</option> 
<option value='11'>11</option> 
<option value='12'>12</option> 
<option value='13'>13</option> 
<option value='14'>14</option> 
<option value='15'>15</option> 
<option value='16'>16</option> 
<option value='17'>17</option> 
<option value='18'>18</option> 
<option value='19'>19</option> 
<option value='20'>20</option> 
<option value='21'>21</option> 
<option value='22'>22</option> 
<option value='23'>23</option> 
<option value='24'>24</option> 
<option value='25'>25</option> 
<option value='26'>26</option> 
<option value='27'>27</option> 
<option value='28'>28</option> 
<option value='29'>29</option> 
<option value='30'>30</option> 
<option value='31'>31</option> 
                                                                     </select><select id='z52'>
                                                                            <option value='0'>Month:</option>
                                                                            <option value='1'>Jan</option> 
                                                                            <option value='2'>Feb</option> 
                                                                            <option value='3'>Mar</option> 
                                                                            <option value='4'>Apr</option> 
                                                                            <option value='5'>May</option> 
                                                                            <option value='6'>Jun</option> 
                                                                            <option value='7'>Jul</option> 
                                                                            <option value='8'>Aug</option> 
                                                                            <option value='9'>Sep</option> 
                                                                            <option value='10'>Oct</option> 
                                                                            <option value='11'>Nov</option> 
                                                                            <option value='12'>Dec</option>  
                                                                    </select><select id='z53'>

<option value='0'>Year:</option>                                                                             
<option value='2011'>2011</option> 
<option value='2010'>2010</option> 
<option value='2009'>2009</option> 
<option value='2008'>2008</option> 
<option value='2007'>2007</option> 
<option value='2006'>2006</option> 
<option value='2005'>2005</option> 
<option value='2004'>2004</option> 
<option value='2003'>2003</option> 
<option value='2002'>2002</option> 
<option value='2001'>2001</option> 
<option value='2000'>2000</option> 
<option value='1999'>1999</option> 
<option value='1998'>1998</option> 
<option value='1997'>1997</option> 
<option value='1996'>1996</option> 
<option value='1995'>1995</option> 
<option value='1994'>1994</option> 
<option value='1993'>1993</option> 
<option value='1992'>1992</option> 
<option value='1991'>1991</option> 
<option value='1990'>1990</option> 
<option value='1989'>1989</option> 
<option value='1988'>1988</option> 
<option value='1987'>1987</option> 
<option value='1986'>1986</option> 
<option value='1985'>1985</option> 
<option value='1984'>1984</option> 
<option value='1983'>1983</option> 
<option value='1982'>1982</option> 
<option value='1981'>1981</option> 
<option value='1980'>1980</option> 
<option value='1979'>1979</option> 
<option value='1978'>1978</option> 
<option value='1977'>1977</option> 
<option value='1976'>1976</option> 
<option value='1975'>1975</option> 
<option value='1974'>1974</option> 
<option value='1973'>1973</option> 
<option value='1972'>1972</option> 
<option value='1971'>1971</option> 
<option value='1970'>1970</option> 
<option value='1969'>1969</option> 
<option value='1968'>1968</option> 
<option value='1967'>1967</option> 
<option value='1966'>1966</option> 
<option value='1965'>1965</option> 
<option value='1964'>1964</option> 
<option value='1963'>1963</option> 
<option value='1962'>1962</option> 
<option value='1961'>1961</option> 
<option value='1960'>1960</option> 
<option value='1959'>1959</option> 
<option value='1958'>1958</option> 
<option value='1957'>1957</option> 
<option value='1956'>1956</option> 
<option value='1955'>1955</option> 
<option value='1954'>1954</option> 
<option value='1953'>1953</option> 
<option value='1952'>1952</option> 
<option value='1951'>1951</option> 
<option value='1950'>1950</option> 
<option value='1949'>1949</option> 
<option value='1948'>1948</option> 
<option value='1947'>1947</option> 
<option value='1946'>1946</option> 
<option value='1945'>1945</option> 
<option value='1944'>1944</option> 
<option value='1943'>1943</option> 
<option value='1942'>1942</option> 
<option value='1941'>1941</option> 
<option value='1940'>1940</option> 
<option value='1939'>1939</option> 
<option value='1938'>1938</option> 
<option value='1937'>1937</option> 
<option value='1936'>1936</option> 
<option value='1935'>1935</option> 
<option value='1934'>1934</option> 
<option value='1933'>1933</option> 
<option value='1932'>1932</option> 
<option value='1931'>1931</option> 
<option value='1930'>1930</option> 
<option value='1929'>1929</option> 
<option value='1928'>1928</option> 
<option value='1927'>1927</option> 
<option value='1926'>1926</option> 
<option value='1925'>1925</option> 
<option value='1924'>1924</option> 
<option value='1923'>1923</option> 
<option value='1922'>1922</option> 
<option value='1921'>1921</option> 
<option value='1920'>1920</option> 
<option value='1919'>1919</option> 
<option value='1918'>1918</option> 
<option value='1917'>1917</option> 
<option value='1916'>1916</option> 
<option value='1915'>1915</option> 
<option value='1914'>1914</option> 
<option value='1913'>1913</option> 
<option value='1912'>1912</option> 
<option value='1911'>1911</option> 

                                                         </select>













                                               <input type='button' value='save' onclick=ediu('5','birthday')>
                                               <input type='button' value='cancel' onclick=canu('#n5','#m5')>                                        
                                                                       </span>
                               </td><td id='q5' class='yut'></td></tr>
                               <tr><td class='tab4'><span class='cj'>interests  </span><div id='n6'> 
                               <span id='y6'>".$count72["interest"]." </span> <span class='der' onclick=disp('#n6','#m6')> edit</span>
                                                              </div><span id='m6' class='inv'>
                                               <textarea id='z6' rows='3' cols='50'></textarea><br>
                                               <input type='button' value='save' onclick=ediu('6','interest')>
                                               <input type='button' value='cancel' onclick=canu('#n6','#m6')>                                        
                                                                       </span>
                               </td></tr>
                               <tr><td class='tab4'><span class='cj'>email  </span><div id='n7'>
                        <span id='y7'>".$count72["email"]." </span> <span class='der' onclick=disp('#n7','#m7')> edit</span>
                                                              </div><span id='m7' class='inv'>
                                               <input id='z7' type='text'>
                                               <input type='button' value='save' onclick=ediu('7','email')>
                                               <input type='button' value='cancel' onclick=canu('#n7','#m7')>                                        
                                                                       </span>
                            </td><td id='q7' class='yut'></td></tr>
                              </table>
                              <span class='yif'>statistics</span>
                              <table class='tabv'>
                               <tr><td class='tab4'><span class='cj'>no.of posts </span><br>".$count40["postsx"]."</td></tr>
                               <tr><td class='tab4'><span class='cj'>join date </span><br>".$count72["joindate"]."</td></tr>
                                <tr><td class='tab4'><span class='cj'>last visit </span><br>".$count72["last"]."</td></tr>
                               </table>";




                                 

                                 }
                           else

                             $pol=10;
                        }
                   else
                       {
                            $pol=10;
                       }
                       
                      if($pol==10)
                        {
                       echo   "<span class='yif'>username</span> : <span class='ix'>".$count72["username"]."</span><hr>     
                               <span class='yif'>about ".$count72["username"]."</span>
                              <table class='tabv'>
                              <tr><td class='tab4'><span class='cj'>name  </span><br>".$count72["name"]."</td></tr>
                              <tr><td class='tab4'><span class='cj'>occupation </span><br> ".$count72["occupation"]."</td></tr>
                              <tr><td class='tab4'><span class='cj'>gender  </span><br>".$count72["gender"]."</td></tr>
                              <tr><td class='tab4'><span class='cj'>location  </span><br>".$count72["location"]."</td></tr>
                               <tr><td class='tab4'><span class='cj'>birthday  </span><br>".$count72["birthday"]."</td></tr>
                               <tr><td class='tab4'><span class='cj'>interests </span><br> ".$count72["interest"]."</td></tr>
                               <tr><td class='tab4'><span class='cj'>email </span><br> ".$count72["email"]."</td></tr>
                              </table>
                              <span class='yif'>statistics</span>
                              <table class='tabv'>
                               <tr><td class='tab4'><span class='cj'>no.of posts  </span><br>".$count40["postsx"]."</td></tr>
                               <tr><td class='tab4'><span class='cj'>join date  </span><br>".$count72["joindate"]."</td></tr>
                                <tr><td class='tab4'><span class='cj'>last visit </span><br> ".$count72["last"]."</td></tr>
                               </table>";           



                        }     





                  ?>
                 </div>
            </div>

           <div>


</body>
</html>


