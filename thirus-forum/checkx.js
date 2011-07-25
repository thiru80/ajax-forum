 
  function ithread()
             { 

                 var fg=0;
                 if($("#tix").val()=="")
               {  $("#lok1").text("enter title");
                    fg=fg+1;
                }
                  else
                {  $("#lok1").text("");
                }
                   if($("#cox").val()=="")
               {  $("#lok2").text("enter content");
                     fg=fg+1;
                }
                     else
                {  $("#lok2").text("");
                }
                
               
               var tix=$("#tix").val();
               var cox=$("#cox").val();
                var dat="titlex="+tix+"&contentx="+cox;
              if(fg==0)
               {
                 $.getJSON(
                     "processx.php",
                     dat,
                    
                    function(dax)
                     { 
                       var dax2="<tr><td width='60%' style='text-align:left;' ><a href='rex.php?xs="+ dax.parentid +"'>"+ dax.title +"</a><br><span style='font-size:77%'>"+dax.time1+" ,"+ dax.day +" by <a href='prox.php?xf="+ dax.author +"'>"+ dax.author +"</a></span></td><td style='text-align:right;font-size:70%;' width='20%' >"+dax.time2 +" ,"+ dax.day2 +"<br> by<a href='prox.php?xf="+ dax.author2 +"'> "+ dax.author2 +"</a></td><td>0</td><td >"+dax.re5+"</td></tr>";

                    $("#tablex").append(dax2);
                     }
                     


                   );
                }


             }

       function ithread2()
             {   var fgd=0;
                 if($("#tix").val()=="")
               {  $("#lok1").text("enter title");
                    fgd=fgd+1;
                }
                  else
                {  $("#lok1").text("");
                }
                   if($("#cox").val()=="")
               {  $("#lok2").text("enter content");
                     fgd=fgd+1;
                }
                     else
                {  $("#lok2").text("");
                }
                
               var tix=$("#tix").val();
               var cox=$("#cox").val();
                var dat="titlex="+tix+"&contentx="+cox;
             if(fgd==0)
              {   $.getJSON(
                     "process2x.php",
                     dat,
                    
                    function(dax)
                     { 

                            var dax2=" <div id='ipost'><table id='tablex2'>      <tr><td width='26%' valign='top'><h3> <a href='prox.php?xf=" +dax.author+"'>"+dax.author+"</a></h3><div id='picx' style='text-align:center;'>   <img src='"+dax.picture+"' height='100' width='120'> </div><div class='sd2'> <strong>no.posts : </strong>"+dax.posts+"<br><strong>joined : </strong>"+dax.joined+"<br><strong>last visit </strong>: "+dax.last+"</div>      </td><td valign='top'><span class='ix'>"+dax.title+"</span><span class='iy'>"+dax.time+" ,"+dax.day+"</span><div class='iz'><span onclick='zpost("+dax.postid+",100)' style='color:green;'>like</span> | <span onclick='zpost("+dax.postid+",500)' style='color:red;'>dislike</span></div><br><div id='za" +dax.postid+ "' class='zax'>0 likes 0 dislikes</div><hr>"+dax.content+"</td></tr></table>             </div> " ;
                    
                        $("#inz").append(dax2);
                     
                     }
                     


                   ); }



             }


            function zpost(dasx,xad)
             {     
                 var datz="postq="+dasx+"&stat="+xad;   
                  var dae="posty="+dasx;
                  $.ajax({
                        url:"process7x.php",
                        data:dae,
                        type:"POST",
                        success:function(yaz)
                           {
                              if(yaz==1)
                               {    $.ajax({
                        url:"process3x.php",
                        data:datz,
                        type:"POST",
                        success:function(yaz)
                           {
                              $("#za"+dasx).text(yaz);
                            
                            }


                        }); 

                               
                                }
                                  else
           
             $("#za"+dasx).text("you have already given like/dislike");
                            
                            }
                       });
       

             }



  function scheck()
{ 
     var xop=0;
      var xos=0;
   
 
    var sx=/^(.){6,}$/;
    if(!sx.test($("#spassx2").val()))
    {  $("#passer").text("atleast 6 characters");
             xos=1;
          
     }
     if($("#spassx").val()!=$("#spassx2").val())
       {   $("#passer").text("passwords do not match!");
            xop=1;
          
      }
    
     xop=xop+xos;
      if(xop==0)
     { $("#passer").text("");}
       else 
    { return true;

     }

    
}


   function scheck2()
{     var xop=0;
      var xos=0;
    if(($("#spassx").val()!=$("#spassx2").val()) && ($("#spassx2").val()!=""))
       {   $("#passer").text("passwords do not match!");
            xop=1;
          
      }
 
    var sx=/^(.){6,}$/;
    if(!sx.test($("#spassx").val()))
    {  $("#passer").text("atleast 6 characters");
             xos=1;
          
     }
    
     xop=xop+xos;
      if(xop==0)
     { $("#passer").text("");}
       else 
    { return true;

     }
    
}




   function scheck11()
{ var ew=0;
  var ey=0;
var dax2="rep1="+$("#susr2").val();
var daxo=/^(.){1,}$/;
if(!daxo.test($("#susr2").val()))
{
 $("#usrer").text("enter username");
   ew=1;
}

$.ajax({
         url:"checkusr.php",
         data:dax2,
         type:"POST",
         success:function(dax3)
                {
                  if(dax3==1)
               {  $("#usrer").text("username already exists");
                  ey=1;                                      }
                

                }
        



       });
ew=ew+ey;
if(ew==0)
{  $("#usrer").text(""); }
else
{
 return true;
}




}






  function scheck32()
{

var df=/^.*[@]{1}.*[.]{1}.{1,}$/;
if(!df.test($("#cemailx").val()))
{  $("#emailer").text("enter valid email address");
   return true;
  }
else
 {
    $("#emailer").text("");
}


}



function scheck97()

{

if($("#cgenx").val()==0)
{
  $("#gener").text("select gender");
   return true;
}
else
{
   $("#gener").text("");
}


}



function scheck851()
{  var cd=0;
  if(($("#cday").val()==0)||($("#cmonth").val()==0)||($("#cyear").val()==0))
 {

   $("#birer").text("select");
   
}


 if($("#cday").val()==0)
 {

   $("#birer").append(" day");
    cd=cd+1;
}
 





 if($("#cmonth").val()==0)
 {

   $("#birer").append(" month");
   cd=cd+1;
}
 




if($("#cyear").val()==0)
 {

   $("#birer").append(" year");
   cd=cd+1;
}

 if(cd==0)
  {
     $("#birer").text("");
   }
 else
   { return true;
   }

}
function w()
{ var vc=0;
 

 if(scheck())
     vc=vc+1;
 if(scheck2())
     vc=vc+1;
 if(scheck32())
     vc=vc+1;
 if(scheck97())
     vc=vc+1;
  if(scheck851())
     vc=vc+1;
  if(scheck11())
     vc=vc+1;
 if(vc!=0)
  {
    return false;

   }
}




function disp(dat,datu)
{

 $(dat).css("display","none");
 $(datu).css("display","block");


}

function canu(das,dasu)
{
 $(das).css("display","block");
 $(dasu).css("display","none");
 $("#q7").text("");
 $("#q3").text("");
 $("#q5").text("");

}

function ediu(idx,namex)
{ var chex=0;
 if(idx!=5)
  {var valx=$("#z"+idx).val();
  }


  if(valx=="")
   {  valx="N/A";
                 }
  if(idx==7)
  {
   var ds=/^.*[@]{1}.*[.]{1}.{1,}$/;
   if(!ds.test(valx))
  {  $("#q7").text("enter valid email address");
   chex=chex+10;
  }
else 
 {  
    $("#q7").text("");
  }

    }
  if(idx==3)
    {  if(valx==0)
      { chex=chex+10;
       $("#q3").text("select gender"); }
      else
       $("#q3").text("");
    
     }
  if(idx==5)
    {
   if(($("#z51").val()==0)||($("#z52").val()==0)||($("#z53").val()==0))
       {    chex=chex+10;
            $("#q5").text("select birthday");
        }
    else
      {
           $("#q5").text("");
           valx=$("#z53").val()+"-"+$("#z52").val()+"-"+$("#z51").val();
      }
   }



var dat="valx="+valx+"&namex="+namex;

if(chex==0)
{
           $.ajax({
           url:"process4x.php",
           data:dat,
          type:"POST",
          success:function(dato)
      {   $("#y"+idx).text(dato);
          $("#n"+idx).css("display","block");
          $("#m"+idx).css("display","none");
       

       }


                  });

}


}




function ext2()
{

$("#pico").css("display","none");
$("#uploax").css("display","block");


}

function ext3()
{
$("#mesx").text("");
$("#pico").css("display","block");
$("#uploax").css("display","none");



}

function chanp()
{
  var vx=0;

 if(scheck())
     vx=vx+1;
 if(scheck2())
     vx=vx+1;
if(vx==0)
{

var oldx=$("#oldpassx").val();
var pasx=$("#spassx").val();
var dacx="oldx="+oldx+"&pasx="+pasx;
$.ajax({
  url:"process6x.php",
  type:"POST",
  data:dacx,
  success:function(dase)
        { 
      $("#changf").html(dase);       



     }


});

}






}


