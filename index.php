<?php include("eyie/includes/header.php") ?>

       
<?php
     if(!@$_GET['inc']) $_GET['inc']='timeline.html';
      include("eyie/includes/{$_GET['inc']}");
?>   
         
<?php include("eyie/includes/footer.php") ?>