 
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
                 $.ajax({
                     url:"processx.php",
                     data:dat,
                    type:"GET",
                    success:function(dax)
                     { $("#tablex").append(dax);
                     }
                     


                   });
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
              {   $.ajax({
                     url:"process2x.php",
                     data:dat,
                    type:"GET",
                    success:function(dax)
                     { $("#inz").append(dax);
                     
                     }
                     


                   }); }



             }


            function zpost(dasx,xad)
             {     var datz="postq="+dasx+"&stat="+xad;
                   $.ajax({
                        url:"process3x.php",
                        data:datz,
                        type:"GET",
                        success:function(yaz)
                           {
                              $("#za"+dasx).text(yaz);
                            
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


