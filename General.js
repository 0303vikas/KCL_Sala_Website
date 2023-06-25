function myFunction(){


/* put click function back*/
  document.getElementById("polarisedtext1_2").onclick= myFunctionb;
  document.getElementById("polarisedtext1_3").onclick= myFunctionc;
  document.getElementById("polarisedtext1_4").onclick= myFunctiond;
  document.getElementById("polarisedtext2_1").onclick= myFunctione;
  document.getElementById("polarisedtext2_2").onclick= myFunctionf;
  document.getElementById("polarisedtext2_3").onclick= myFunctiong;
  document.getElementById("polarisedtext2_4").onclick= myFunctionh;
  document.getElementById("polarisedtext2_5").onclick= myFunctioni;
  document.getElementById("polarisedtext3_1").onclick= myFunctionj;
  document.getElementById("polarisedtext3_2").onclick= myFunctionk;
  document.getElementById("polarisedtext3_3").onclick= myFunctionl;
  document.getElementById("polarisedtext3_4").onclick= myFunctionm;
  document.getElementById("polarisedtext3_5").onclick= myFunctionn;
  document.getElementById("polarisedtext4_1").onclick= myFunctiono;
  document.getElementById("polarisedtext4_2").onclick= myFunctionp;
  document.getElementById("polarisedtext4_3").onclick= myFunctionq;
 
 

/* function to remove the table on second click*/
document.getElementById("polarisedtext1_1").onclick= tablegone;
function tablegone(){
  var select_table = document.getElementById("add_table1");
  if(typeof(select_table) !="undefined" && select_table !== null){select_table.remove();
  var divd1 = document.getElementById("pol1_1");        
              divd1.style.height = "374.4px";
         document.getElementById("polarisedtext1_1").onclick=myFunction; }else{};
}

   /*remove previous table*/

   for(i = 2;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

   /* map*/

     var iframe1 = document.getElementById("iframe1");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  /* image again and map removed*/
    var img_1 = document.getElementById("polarised1_1");
  if(typeof(img_1) !='undefined' && img_1 !== null){
   

}else{
     var s = document.getElementById("pol1_1");
       var c = document.createElement("img");
       c.setAttribute("id","polarised1_1");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/videog1.jpg");
         
         c.setAttribute("alt","Videogame store");        
          s.insertBefore(c,s.childNodes[0]);};

        /*size of div */
          for(x=2;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }  
   
         

          var divd1 = document.getElementById("pol1_1");        
              divd1.style.height = "448.8px";

       
    /*create table*/
   
    var create_div1 =document.getElementById("new_div1_1");

    var create_table = document.createElement("table");
    create_table.id = "add_table1";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");  
    create_a.setAttribute("href","https://www.facebook.com/PopShopSalo/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");  
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         
          /*remove table*/
     function myFunction2(){
              document.getElementById("add_table1").remove();              
}

            /* add iframe*/
         function myFunction3(){
            document.getElementById("polarised1_1").remove();
         var s = document.getElementById("pol1_1");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe1");
       c.setAttribute("class","polarised");        
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4930200870103!2d23.12403471611533!3d60.3875344820415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47ac23586397%3A0x9f6ed69ec1067936!2sMika%20Kankare%20Oy!5e0!3m2!1sen!2sfi!4v1587538967637!5m2!1sen!2sfi");        
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0");
 
         s.insertBefore(c,s.childNodes[0]);

}
        /*div size*/
    function myFunction4(){ document.getElementById("pol1_1").style.height="374.4px";document.getElementById("polarisedtext1_1").onclick= myFunction;

    }
}

function myFunctionb(){
  for(i = 1;i<2;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 3;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe2");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised1_2");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol1_2");
       var c = document.createElement("img");
       c.setAttribute("id","polarised1_2");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/videog2.jpg");
         
         c.setAttribute("alt","VEIKON KONE Image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<2;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=3;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol1_2");        
             divd1.style.height = "448.8px";


    
    var create_div1 =document.getElementById("new_div1_2");

    var create_table = document.createElement("table");
    create_table.id = "add_table2";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.veikonkone.fi/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table2").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised1_2").remove();
         var s = document.getElementById("pol1_2");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe2");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.033708523538!2d23.127704216089576!3d60.3951210820444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47aed631f649%3A0xe81d7ddd784156a1!2sVeikon%20Kone%20Salo!5e0!3m2!1sen!2sfi!4v1587539115245!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol1_2").style.height="374.4px";

    }
}


function myFunctionc(){ 

  for(i = 1;i<3;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 4;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe3");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised1_3");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol1_3");
       var c = document.createElement("img");
       c.setAttribute("id","polarised1_3");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/videog3.jpg");
         
         c.setAttribute("alt","GIGANTTI Image");        
          s.insertBefore(c,s.childNodes[0]);};

       for(x=1;x<3;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=4;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
             

          var divd1 = document.getElementById("pol1_3");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div1_3");

    var create_table = document.createElement("table");
    create_table.id = "add_table3";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.gigantti.fi/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table3").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised1_3").remove();
         var s = document.getElementById("pol1_3");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe3");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4440.020359337871!2d23.123519549711645!3d60.38872745021636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47ae8fcfd257%3A0xee441e38de64e7f6!2sGigantti%20Salo!5e0!3m2!1sen!2sfi!4v1587539323101!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol1_3").style.height="374.4px";

    }
}

function myFunctiond(){ 
  for(i = 1;i<4;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 5;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe4");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised1_4");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol1_4");
       var c = document.createElement("img");
       c.setAttribute("id","polarised1_4");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/videog4.jpg");
         
         c.setAttribute("alt","ELISA Image");        
          s.insertBefore(c,s.childNodes[0]);};

        
     for(x=1;x<4;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        

          for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol1_4");        
              divd1.style.height = "448.8px";
    
    var create_div1 =document.getElementById("new_div1_4");

    var create_table = document.createElement("table");
    create_table.id = "add_table4";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://elisa.fi/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table4").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised1_4").remove();
         var s = document.getElementById("pol1_4");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe4");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.7701671407782!2d23.12224865838318!3d60.38675294551035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c46535405e42b%3A0xd861258e8fdc13dc!2zRWxpc2EgTXl5bcOkbMOk!5e0!3m2!1sen!2sfi!4v1587539450714!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol1_4").style.height="374.4px";

    }
}


function myFunctione(){ 
  for(i = 1;i<5;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 6;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe5");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised2_1");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol2_1");
       var c = document.createElement("img");
       c.setAttribute("id","polarised2_1");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/clothes1.jpg");
         
         c.setAttribute("alt","STADIUM image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        

          for(x=2;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol2_1");        
             divd1.style.height = "448.8px";

    
    var create_div1 =document.getElementById("new_div2_1");

    var create_table = document.createElement("table");
    create_table.id = "add_table5";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.stadium.fi/?gclid=CjwKCAjw1v_0BRAkEiwALFkj5qNSleiTj8pOLHkfvnR1y6AKQn6UKA3aO_yulMCbybpCbIq_BDNEAxoCQpIQAvD_BwE");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table5").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised2_1").remove();
         var s = document.getElementById("pol2_1");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe5");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.7769854203327!2d23.12308225835102!3d60.38652769551031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c46533a77298b%3A0xb57725b2657ed8f5!2sStadium%20Salo!5e0!3m2!1sen!2sfi!4v1587539785213!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol2_1").style.height="374.4px";

    }
}

function myFunctionf(){ 
  for(i = 1;i<6;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 7;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe6");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised2_2");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol2_2");
       var c = document.createElement("img");
       c.setAttribute("id","polarised2_2");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/clothes2.jpg");
         
         c.setAttribute("alt","H&M image");        
          s.insertBefore(c,s.childNodes[0]);};

       for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<2;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=3;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol2_2");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div2_2");

    var create_table = document.createElement("table");
    create_table.id = "add_table6";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www2.hm.com/fi_fi/customer-service/shopping-at-hm/local-store.FI0032.html");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table6").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised2_2").remove();
         var s = document.getElementById("pol2_2");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe6");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.7774273593498!2d23.124266758351013!3d60.386513095510296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c465325f7a6d5%3A0x77a9f6d56392c8c4!2zSCZN!5e0!3m2!1sen!2sfi!4v1587540158884!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

  function myFunction4(){ document.getElementById("pol2_2").style.height="374.4px";

    }
}

function myFunctiong(){ 
  for(i = 1;i<7;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 8;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe7");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised2_3");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol2_3");
       var c = document.createElement("img");
       c.setAttribute("id","polarised2_3");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/clothes3.jpg");
         
         c.setAttribute("alt","SCANDINAVIAN OUTDOOR image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<3;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=4;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol2_3");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div2_3");

    var create_table = document.createElement("table");
    create_table.id = "add_table7";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://scandinavianoutdoor.fi/myymalat/salo/?gclid=CjwKCAjw1v_0BRAkEiwALFkj5v2WaqMMK3OE5wsIWSv5DHJIC0o8IBs4MkhJjTTS7p5VMgkgepfOThoCpLIQAvD_BwE");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table7").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised2_3").remove();
         var s = document.getElementById("pol2_3");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe7");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.487625952797!2d23.120335916089225!3d60.387623582041556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c46534cd9985f%3A0xcfe07695ed532811!2sScandinavian%20Outdoor%20Salo!5e0!3m2!1sen!2sfi!4v1587540290376!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

  function myFunction4(){ document.getElementById("pol2_3").style.height="374.4px";

    }
}


function myFunctionh(){ 
  for(i = 1;i<8;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 9;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe8");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised2_4");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol2_4");
       var c = document.createElement("img");
       c.setAttribute("id","polarised2_4");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/clothes4.jpg");
         
         c.setAttribute("alt","KappAhl image");        
          s.insertBefore(c,s.childNodes[0]);};
 

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<4;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=5;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
             

          var divd1 = document.getElementById("pol2_4");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div2_4");

    var create_table = document.createElement("table");
    create_table.id = "add_table8";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.kappahl.com/fi-FI/asiakaspalvelu/asiakaspalvelu/loytyyko-tuote-myymalasta/?gclid=CjwKCAjw1v_0BRAkEiwALFkj5u5YEwbjjYWs5ToZGh1ZldJd88Av30b8Pw4d31j2nGHSMclnhTAznhoCBgYQAvD_BwE");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table8").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised2_4").remove();
         var s = document.getElementById("pol2_4");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe8");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.5565385343866!2d23.121558816089202!3d60.386485282041185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c465325f7a6d5%3A0x8a63a66923d73534!2sKappAhl!5e0!3m2!1sen!2sfi!4v1587540433649!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol2_4").style.height="374.4px";

    }
}
function myFunctioni(){ 
  for(i = 1;i<9;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 10;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe9");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised2_5");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol2_5");
       var c = document.createElement("img");
       c.setAttribute("id","polarised2_5");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/clothes5.jpg");
         
         c.setAttribute("alt","Dressmann image");        
          s.insertBefore(c,s.childNodes[0]);};

        
    for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<5;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          
    for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
            

          var divd1 = document.getElementById("pol2_5");        
              divd1.style.height = "448.8px";
    
    var create_div1 =document.getElementById("new_div2_5");

    var create_table = document.createElement("table");
    create_table.id = "add_table9";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://dressmann.com/fi/?gclid=CjwKCAjw1v_0BRAkEiwALFkj5nfJ5tU9YXW8n8DwOTRcn2pcszyCcw-sF4tLnOnRUKMJGw2ugr6zehoCq74QAvD_BwE");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table9").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised2_5").remove();
         var s = document.getElementById("pol2_5");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe9");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.5633552861627!2d23.122552516089222!3d60.386372682041085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c465325f7a6d5%3A0x3965d7d59b848432!2sDressmann%20Salo!5e0!3m2!1sen!2sfi!4v1587540567209!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}
    function myFunction4(){ document.getElementById("pol2_5").style.height="374.4px";

    }
  
}

function myFunctionj(){ 
  for(i = 1;i<10;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 11;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}


     var iframe1 = document.getElementById("iframe10");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised3_1");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol3_1");
       var c = document.createElement("img");
       c.setAttribute("id","polarised3_1");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/ground1.jpg");
         
         c.setAttribute("alt","Ground image");        
          s.insertBefore(c,s.childNodes[0]);};

        
    for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          
    for(x=2;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol3_1");        
              divd1.style.height = "448.8px";
    
    var create_div1 =document.getElementById("new_div3_1");

    var create_table = document.createElement("table");
    create_table.id = "add_table10";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.salo.fi/vapaaaikajamatkailu/liikunta/liikuntapaikat/ulkoliikuntapaikat/kentat/yleisurheilukentat/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table10").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised3_1").remove();
         var s = document.getElementById("pol3_1");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe10");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.9707967494342!2d23.136413316088912!3d60.37964228203861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47da0c30f8d3%3A0x35ef348c645e1750!2sSalon%20keskusurheilukentt%C3%A4!5e0!3m2!1sen!2sfi!4v1587540786699!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol3_1").style.height="374.4px";

    }
}

function myFunctionk(){ 
  for(i = 1;i<11;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 12;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe11");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised3_2");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol3_2");
       var c = document.createElement("img");
       c.setAttribute("id","polarised3_2");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/ground2.jpg");
         
         c.setAttribute("alt","Ground image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<2;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    for(x=3;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol3_2");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div3_2");

    var create_table = document.createElement("table");
    create_table.id = "add_table11";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.facebook.com/pages/Sso-Halli/113015269191684");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table11").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised3_2").remove();
         var s = document.getElementById("pol3_2");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe11");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.8284641159123!2d23.138478516089016!3d60.381993482039555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c464b6fa9fd25%3A0xe558dafff4bd4915!2sSSO-halli!5e0!3m2!1sen!2sfi!4v1587540949709!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol3_2").style.height="374.4px";

    }
}

function myFunctionl(){ 
  for(i = 1;i<12;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 13;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe12");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised3_3");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol3_3");
       var c = document.createElement("img");
       c.setAttribute("id","polarised3_3");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/ground3.jpg");
         
         c.setAttribute("alt","Salon urheilupuisto image");        
          s.insertBefore(c,s.childNodes[0]);};

        
    for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<3;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    for(x=4;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol3_3");        
              divd1.style.height = "448.8px";
    
    var create_div1 =document.getElementById("new_div3_3");

    var create_table = document.createElement("table");
    create_table.id = "add_table12";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.salo.fi/vapaaaikajamatkailu/liikunta/liikuntapaikat/urheilupuisto/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table12").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised3_3").remove();
         var s = document.getElementById("pol3_3");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe12");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.9323929328298!2d23.13761886608891!3d60.38027668203884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c4702944acf7f%3A0xa094d40babbadbe6!2sSalon%20urheilupuisto!5e0!3m2!1sen!2sfi!4v1587541052557!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol3_3").style.height="374.4px";

    }
}

function myFunctionm(){ 
  for(i = 1;i<13;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 14;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe13");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised3_4");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol3_4");
       var c = document.createElement("img");
       c.setAttribute("id","polarised3_4");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/ground4.jpg");
          
         c.setAttribute("alt","Gym image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<4;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    for(x=5;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol3_4");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div3_4");

    var create_table = document.createElement("table");
    create_table.id = "add_table13";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.gymfitness.fi/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table13").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised3_4").remove();
         var s = document.getElementById("pol3_4");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe13");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.5536265803803!2d23.125626016089214!3d60.38653338204113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c464c65138a4b%3A0xebae1848a9f74f85!2sSalon%20Gym%20%26%20Fitness%20Center%20Oy!5e0!3m2!1sen!2sfi!4v1587541161723!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}
    function myFunction4(){ document.getElementById("pol3_4").style.height="374.4px";

    }
  
}


function myFunctionn(){ 
  for(i = 1;i<14;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 15;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe14");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised3_5");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol3_5");
       var c = document.createElement("img");
       c.setAttribute("id","polarised3_5");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/ground5.jpg");
         
         c.setAttribute("alt","Gym image");        
          s.insertBefore(c,s.childNodes[0]);};

       for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<5;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    
          for(x=1;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol3_5");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div3_5");

    var create_table = document.createElement("table");
    create_table.id = "add_table14";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://salo.ladysclub.fi/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table14").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised3_5").remove();
         var s = document.getElementById("pol3_5");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe14");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4643118566019!2d23.120000416089237!3d60.38800868204175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47aca8adf2af%3A0x291bf5f3d4544cce!2sLady&#39;s%20Club%20Salo!5e0!3m2!1sen!2sfi!4v1587541269099!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}
    function myFunction4(){ document.getElementById("pol3_5").style.height="374.4px";

    }
  
}

function myFunctiono(){ 
  for(i = 1;i<15;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 16;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe15");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised4_1");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol4_1");
       var c = document.createElement("img");
       c.setAttribute("id","polarised4_1");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/shoes1.jpg");
         
         c.setAttribute("alt","Shoe store image");        
          s.insertBefore(c,s.childNodes[0]);};

        
    for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    
          for(x=2;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
             

          var divd1 = document.getElementById("pol4_1");        
              divd1.style.height = "448.8px";
    
    var create_div1 =document.getElementById("new_div4_1");

    var create_table = document.createElement("table");
    create_table.id = "add_table15";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.facebook.com/kenkaplaza/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table15").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised4_1").remove();
         var s = document.getElementById("pol4_1");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe15");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.5633552861627!2d23.122552516089222!3d60.386372682041085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c465325f7a6d5%3A0xd406ec499dfd4971!2sKenk%C3%A4%20Plaza!5e0!3m2!1sen!2sfi!4v1587541865959!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol4_1").style.height="374.4px";

    }
}

function myFunctionp(){
  for(i = 1;i<16;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    for(i = 17;i<18;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

     var iframe1 = document.getElementById("iframe16");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised4_2");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol4_2");
       var c = document.createElement("img");
       c.setAttribute("id","polarised4_2");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/shoes2.jpg");
         
         c.setAttribute("alt","Shoe shop image");        
          s.insertBefore(c,s.childNodes[0]);};

        for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    for(x=1;x<2;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
          for(x=3;x<4;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
              

          var divd1 = document.getElementById("pol4_2");        
              divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div4_2");

    var create_table = document.createElement("table");
    create_table.id = "add_table16";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","https://www.kookenka.fi/myymalat/kookenka-salo-kauppakeskus-plaza/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table16").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised4_2").remove();
         var s = document.getElementById("pol4_2");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe16");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.546973274836!2d23.12127451608913!3d60.3866432820412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c46532892e485%3A0xbf2d2d09d604cf78!2zS29va2Vua8Ok!5e0!3m2!1sen!2sfi!4v1587541979399!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol4_2").style.height="374.4px";

    }
}

function myFunctionq(){ 
  for(i = 1;i<17;i++){
    var tab = document.getElementById('add_table' + i);
    if(typeof(tab) !='undefined' && tab !== null){tab.remove();}else{}}

    

     var iframe1 = document.getElementById("iframe17");
  if(typeof(iframe1) != "undefined" && iframe1 !== null){iframe1.remove();}else{};
  
    var img_1 = document.getElementById("polarised4_3");
  if(typeof(img_1) !='undefined' && img_1 !== null){
    

}else{
     var s = document.getElementById("pol4_3");
       var c = document.createElement("img");
       c.setAttribute("id","polarised4_3");
       c.setAttribute("class","polarised");
         
         c.setAttribute("src","./images/flow1.jpg");
         
         c.setAttribute("alt","second hand shop image");        
          s.insertBefore(c,s.childNodes[0]);};

           for(x=1;x<5;x++){
            document.getElementById("pol1_" + x).style.height = "374.4px";
          }
        for(x=1;x<6;x++){
            document.getElementById("pol2_" + x).style.height = "374.4px";
          }

          for(x=1;x<6;x++){
            document.getElementById("pol3_" + x).style.height = "374.4px";
          }
    for(x=1;x<3;x++){
            document.getElementById("pol4_" + x).style.height = "374.4px";
          }
         
              

          var divd1 = document.getElementById("pol4_3");        
             divd1.style.height = "448.8px";
    
    
    var create_div1 =document.getElementById("new_div4_3");

    var create_table = document.createElement("table");
    create_table.id = "add_table17";
    create_div1.appendChild(create_table);
    var create_row1 = document.createElement("TR");
    create_row1.id = "add_row1";
    create_row1.setAttribute("class","polarisedtext");    
    create_table.appendChild(create_row1);
    var create_col1 = document.createElement("TD");
    create_col1.id = "add_col1";
    create_col1.style.padding="0px 30px 0px 30px";
    create_row1.appendChild(create_col1);
    var create_text1 = document.createTextNode("Visit Site   :");
    create_col1.appendChild(create_text1);
    var create_col2 = document.createElement("TD");
    create_col2.id = "add_col2";
    create_col2.style.padding="0px 40px 0px 40px";
    create_col2.setAttribute("class","links");
    create_row1.appendChild(create_col2);
    var create_a = document.createElement("a");
    create_a.setAttribute("target","_blank");   
    create_a.setAttribute("href","http://www.xn--kierrtyskeskus-9hb.com/salon-kierratyskeskus/");
    create_a.style.textDecoration = "none";
    create_col2.appendChild(create_a);
    var create_text2 = document.createTextNode("Click Here");   
    create_a.appendChild(create_text2);

    var create_row2 = document.createElement("TR");
    create_row2.id = "add_row2";
    create_row2.setAttribute("class","polarisedtext");
    create_row2.style.marginLeft="30px";
    create_table.appendChild(create_row2);
    var create_col3 = document.createElement("TD");
    create_col3.id = "add_col3";
    create_row2.appendChild(create_col3);
    var create_text3 = document.createTextNode("View map    :");    
    create_col3.appendChild(create_text3);
    var create_col4 = document.createElement("TD");
    create_col4.id = "add_col4";
    create_col4.setAttribute("class","links");
    create_row2.appendChild(create_col4);
    var create_text4 = document.createTextNode("Click Here");
    create_col4.appendChild(create_text4);

     document.getElementById('add_col4').addEventListener('click',myFunction2,false);
     document.getElementById('add_col4').addEventListener('click',myFunction3,false);
     document.getElementById('add_col4').addEventListener('click',myFunction4,false);
         

     function myFunction2(){
              document.getElementById("add_table17").remove();              
}

            
         function myFunction3(){
            document.getElementById("polarised4_3").remove();
         var s = document.getElementById("pol4_3");
       var c = document.createElement("iframe");
       c.setAttribute("id","iframe17");
       c.setAttribute("class","polarised");         
         c.setAttribute("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899.3117699769438!2d23.128669009648366!3d60.39136974695156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468c47c8ffffffff%3A0x72369bcf6d547bea!2sEkoCenter%20Salo!5e0!3m2!1sen!2sfi!4v1587542137664!5m2!1sen!2sfi");         
         c.setAttribute("frameborder","0");
         c.setAttribute("scrolling","no");
         c.setAttribute("marginheight","0");
         c.setAttribute("marginwidth","0"); 
 
         s.insertBefore(c,s.childNodes[0]);

}

    function myFunction4(){ document.getElementById("pol4_3").style.height="374.4px";

    }
}

