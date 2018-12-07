<?php include("includes/header.php") ?>

       
<?php
     if(!@$_GET['inc']) $_GET['inc']='timeline.html';
      include("includes/{$_GET['inc']}");
?>   
         
<?php include("includes/footer.php") ?>