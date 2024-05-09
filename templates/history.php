<?php
include_once('partials/header.php');
?>
  <body class="body">
    <br>
              <!--text s accordionom--> 
              <section class="container">
                    <?php
                    $history_object = new history();
                    echo($history_object->get_history());
                    ?>
             </section>   
  
  </body>
  <?php
include_once('partials/footer.php');
?>