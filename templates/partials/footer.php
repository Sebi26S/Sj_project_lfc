<?php
require_once('../_inc/func.php');
?>




<footer>
   
   <!--next page--> 

<div class="container">

  <div class="row">
    <nav aria-label="Page navigation example ">
      <ul class="pagination justify-content-center ">
       
      
      <!--
      <li class="page-item disabled">
          <a class="page-link  bg-danger text-white">Previous</a>
        </li>
        <li class="page-item"><a class="page-link active border border-black bg-danger" aria-current="page" href="index.html">1</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="history.html">2</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="players.html">3</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="galeria.html">4</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="kontakt.html">5</a></li>
          <a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bg-danger text-white" href="history.html">Next</a>
        </li>--> 
        <?php   
           $pages = array('1'=>'index.php',
                '2'=>'history.php',
                '3'=>'players.php',
                '4'=>'galeira.php',
                '5'=>'kontakt.php'
           );
           echo(generate_footer($pages));
           

        ?>

      </ul>
    </nav>
  </div>

<!--copyright--> 

  <div class="row">
    <div class="copyright">
      <p class="fs-6 fw-bold text-center">This page created for the LFC supporters to be up to date</p>
      <p class="fs-6 fw-bold text-center">You can find here the player's stats or little history of our club</p>
      <p class="fs-6 fw-bold text-center">© COPYRIGHT Svajcer Sebestyén</p>
    </div>
  </div>

</div>




</footer>
</html>