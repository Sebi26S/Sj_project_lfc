<?php
require_once('../_inc/config.php');
?>

<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
      //add_stylesheet();
      $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
      $page_object = new Page();
      $page_object->set_page_name($page_name);
      echo($page_object->add_stylesheet());
    ?>


  </head>
  <header>
    <!--Menu--> 
    <nav class="navbar navbar-expand-sm navbar-danger bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php"><i class='fas fa-futbol'></i>Liverpool</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav nav-underline nav-fills flex-column flex-sm-row mx-auto p-2  ">
             
            <!--
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="history.html">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="players.html">Players</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="galeria.html">Galeria</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="kontakt.html">Kontakt</a>
              </li>
-->
            <?php   
           $pages = array('Home'=>'index.php',
                'History'=>'history.php',
                'Players'=>'players.php',
                'Galeria'=>'galeria.php',
                'Kontakt'=>'kontakt.php',
                'Login'=>'login.php'
           );
         // echo(generate_menu($pages));
         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
          $pages['Odhlasiť'] = 'logout.php';
       }

       $menu_object  = new Menu($pages);
       echo($menu_object->generate_menu());

        ?>
           
              

            </ul>
          </div>
        </div>
      </nav>




      <hr>



      
</header>