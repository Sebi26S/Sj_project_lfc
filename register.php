<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football</title>
    <link rel="stylesheet" href="/css/register.css">
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
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
              
           
              

            </ul>
          </div>
        </div>
      </nav>




      <hr>



      
</header>
<body class="body p-4">
  <br>  
            <!--registration--> 

  <form id="registrationForm">

  <div class="containerr">
    <h1>Registration</h1>
  
      <div class="input-group">
        <label for="firstName">Name:</label>
        <input type="text" id="firstName" name="firstName" required>
      </div>
  
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
  
      <div class="input-group">
        <label for="termsOfService">I agree to the <a href="terms.html">terms of service:</a></label>
        <input type="checkbox" id="termsOfService" name="termsOfService" required>
        
      </div>
  
      <div class="input-group">
        <label for="about">About:</label>
        <textarea name="about" id="about" rows="5"></textarea>
      </div>
  
        <button type="submit" id="submitButton">Submit</button>

    </div>
  </form>
  

    

    <script src="js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
  <footer>
          <!--copyright--> 

    <div class="copyright">
      <p class="fs-6 fw-bold text-center">This page created for the LFC supporters to be up to date</p>
      <p class="fs-6 fw-bold text-center">You can find here the player's stats or little history of our club</p>
      <p class="fs-6 fw-bold text-center">© COPYRIGHT Svajcer Sebestyén</p>
    </div>
  </footer>
</html>

