<?php
    include('partials/header.php');

    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Kontrola, či sa zadané heslá zhodujú
        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                // Registrácia bola úspešná
                echo "<br>";
                echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
            } else {
                // Registrácia zlyhala
                echo "<br>";
                echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
            }
        } else {
            // Heslá sa nezhodujú
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
        <div class="input-group">
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
