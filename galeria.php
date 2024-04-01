<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football</title>
    <link rel="stylesheet" href="css/main.css">
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
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  " href="history.html">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="players.html">Players</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="galeria.html">Galeria</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="kontakt.html">Kontakt</a>
              </li>
               
              

            </ul>
          </div>
        </div>
      </nav>




      <hr>



      
</header>
  <body class="body">
              <!--slideshow--> 

    <br>
    <div class="container ">
      <div class="row mt-5">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner border border-success border-3">
            <div class="carousel-item active">
              <img id="randomImage" class="d-block  imgfixfor">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide </h5>
                <p>This slide is random genarated from img folder</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/plwin.jpg" class="d-block  imgfixfor" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide</h5>
                <p>Liverpool first Pl win</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/MoSalah.jpg" class="d-block  imgfixfor" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide </h5>
                <p>Mohamed Salah one of the best LFC player of all time, and my fav one</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
  </div>
    


    <script src="js/randomgen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
            <!--next--> 

  <footer>
    <nav aria-label="Page navigation example ">
      <ul class="pagination justify-content-center ">
        <li class="page-item ">
          <a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="players.html">Previous</a>
        </li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" aria-current="page" href="index.html">1</a></li>
        <li class="page-item"><a class="page-link  link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="history.html">2</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="players.html">3</a></li>
        <li class="page-item"><a class="page-link active border border-black bg-danger" href="galeria.html">4</a></li>
        <li class="page-item"><a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="kontakt.html">5</a></li>
          <a class="page-link link-white link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover  bg-danger text-white" href="kontakt.html">Next</a>
        </li>
      </ul>
    </nav>
          <!--copyright--> 

    <div class="copyright">
      <p class="fs-6 fw-bold text-center">This page created for the LFC supporters to be up to date</p>
      <p class="fs-6 fw-bold text-center">You can find here the player's stats or little history of our club</p>
      <p class="fs-6 fw-bold text-center">© COPYRIGHT Svajcer Sebestyén</p>
    </div>
  </footer>
</html>