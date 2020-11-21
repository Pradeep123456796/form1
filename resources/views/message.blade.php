<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage() {
            $.ajax({
               type:'get',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
                success:function(data) {
                      $("#msg").val(data.msg);
               }
            });
         }
      </script>
   </head>
   
   <body>
      <div>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
         <input type="text" name=""  id = 'msg' readonly="">

         <input type="button"  onclick="getMessage()"  value="Message" >
      <?php
         //echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>
   </body>

</html>