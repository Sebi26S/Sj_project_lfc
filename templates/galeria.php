<?php
include_once('partials/header.php');
?>
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
              <img src="../img/taa.jpg" class="d-block  imgfixfor">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide </h5>
                <p>Taa vice-captian of LFC</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../img/plwin.jpg" class="d-block  imgfixfor" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide</h5>
                <p>Liverpool first Pl win</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../img/MoSalah.jpg" class="d-block  imgfixfor" alt="...">
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
    


    
  </body>
            <!--next--> 

            <?php
include_once('partials/footer.php');
?>