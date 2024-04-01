<?php
include_once('partials/header.php');
?>


<body class="body p-2">
  <br>  
      <!--alert--> 

  <div class="container">

    <div class="alert alert-success alert-dismissible" role="alert">
      <strong>Hello reader!</strong> If you want to be up to date every day, then sign up for our newsletter! <a href="register.php" class="alert-link">Sign up here!</a>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  </div>
    <!--cookies--> 

  <div id="cookies">
    <div class="containterr">
        <div class="subcontainerr">
            <div class="cookies">
                <h1 class="fs-1 p-2">We value your privacy</h1>
                <p class="p-2">We use cookies to encahnce your browsing experinece, serve personalized ads or content, and anylaze our traffic. By clickling"accept all", you consent to our use of cookies.
                    <a href="https://www.cookieyes.com/blog/cookie-text/">Read more</a>
                    
                </p>
                <p><button id="cookies-btn">Accept all</button></p>
            </div>
        </div>
    </div>
 </div>




    <!--logo and text--> 

    <div class="container">
      <div class="row mt-5">
          <div class="col-lg-6 border border-success p-2 mb-2 border-opacity-50 border-4">
              <h1 class="fs-1 p-2">Liverpool Football club</h1>
              <p class="p-2"> 
                Liverpool Football Club is a professional football club based in Liverpool, England. The club competes in the Premier League, the top tier of English football. Founded in 1892, the club joined the Football League the following year and has played its home games at Anfield since its formation.
              </p>
              <h2 class="fs-2 p-2">Little history </h2>
                  <div>
              
  
                      <p class="p-2">
                        Liverpool is one of the most valuable and widely supported clubs in the world. The club has long-standing rivalries with Manchester United and Everton. Under management by Shankly, in 1964 the team changed from red shirts and white shorts to an all-red home strip which has been used ever since. The club's anthem is "You'll Never Walk Alone".

                        The club's supporters have been involved in two major tragedies. The Heysel Stadium disaster, where escaping fans were pressed against a collapsing wall at the 1985 European Cup Final in Brussels, resulted in 39 deaths. Most of these were Italians and Juventus fans. Liverpool were given a six-year ban from European competition, and all other English clubs received a five-year ban. The Hillsborough disaster in 1989, where 97 Liverpool supporters died in a crush against perimeter fencing, led to the elimination of fenced standing terraces in favour of all-seater stadiums in the top two tiers of English football. Prolonged campaigning for justice saw further coroners inquests, commissions and independent panels that ultimately exonerated the fans.
                      </p>
  
                     <p class="p-2">
                      Residents of Liverpool are often called "Scousers" in reference to scouse, a local stew made popular by sailors in the city; the name is also applied to the distinct Liverpool accent and dialect. The city has a culturally and ethnically diverse population, and historically attracted many immigrants from Ireland, Norway, and Wales. It is also home to the oldest black community in the UK, the oldest Chinese community in Europe and the first mosque in England, now restored.

                      <a href="https://www.liverpoolfc.com"><button type="button" class="btn btn-danger btn-lg btn-sm">Read more</button></a>
                     </p>
                  </div>
                  
          </div>

          
          <div class="col-lg-6 " >
              <img src="../img/lfclogo.jpg" class="img-fluid rounded" alt="">
          </div>
      </div>
      
  </div>

 

      <script src="../js/app.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<?php
include_once('partials/footer.php');
?>