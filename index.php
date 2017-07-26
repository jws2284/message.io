<?php
?>

<html>
  <head>
    <title>greens message</title>
    
  <script>
    function submitChat(){
      if(form1.uname.value == '' || form1.msg.value == ''){
        alert('ALL FIELDS ARE MANDATORY!!!'};
         return;
    }
              var uname = form1.uname.value;
              var msg = form1.msg.value;
              var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadysyatechange = function(){
          if(xmlhttp.readyState==4&&xmlhttp.status==200){
            dccument.getElementById('chatlogs') .innerHTML = xmlhppt.responseText;
          }
        }
        xmlhttp.open('GET','insert.php?uname='+uname+'&msg,=',true);
        xmlhhtp.send();
              
    </script>
  </head>

 <body>
   <form name="form1">
     Enter your chatname: <imput type="text" name="uname" /><br/>
     Your Message: <br/>
     <textarea name="msg"></textarea><br/>
     <a hraf="#" oneclick="submitChat">send</a><br/><br/>
     
 <div id="chatlogs">
   LOADING CHATLOGS PLEASE WAIT...
     </div>
  
