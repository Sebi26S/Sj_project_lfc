<?php
require_once('_inc/func.php');
?>

<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link><!--sporticons--> 


  </head>
  <header>
    <!--Menu--> 
    <nav class="navbar navbar-expand-sm navbar-danger bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><i class='fas fa-futbol'></i>
            Liverpool</a>
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
                'Galeria'=>'galeira.php',
                'Kontakt'=>'kontakt.php'
           );
           //echo(generate_menu($pages));
           $menu_object  = new Menu($pages);
           echo($menu_object->generate_menu());

        ?>
           
              

            </ul>
          </div>
        </div>
      </nav>




      <hr>



      
</header>