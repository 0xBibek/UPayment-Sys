<?php require_once('./usr/inc_data.php'); ?>
<!DOCTYPE html>
<html>
   <body>
      <script>
         setTimeout(function(){
            window.location.href = '<?php echo $url;?>';
         }, 5000);
      </script>
      <p>Everything setup successfully, REDIRECTING in 5 seconds !!</p>
   </body>
</html>