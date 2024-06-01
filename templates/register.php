<?php
    include('partials/header.php');

    $user_object = new User();

    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                echo "<br>";
                echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
                $page = new Page();
                $page->redirect_loginpage();
            } else {
                echo "<br>";
                echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
            }
        } else {
            echo "<br>";
            echo "<p>Heslá sa nezhodujú. Skúste to prosím znova.</p>";
        }
    }
?> 
<body class="body p-2">
<main>
  <br>
  <br>

      <section class="containerr">
        <div class="row">
          <div class="col-100 text-center">
              <h1>Registrácia</h1>
              <form action="" method="POST">
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="password">Heslo:</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm_password">Zopakovať heslo:</label>
                    <br>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit" name="user_register">Registrovať sa</button>
                </form>
          </div>
        </div>
      </section>
    </main>
</body>

    
<?php
    include_once('partials/footer.php')
?> 
