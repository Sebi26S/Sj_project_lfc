<?php
include_once('partials/header.php');

if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
    header('Location: admin.php');
}
?>
<body class="body p-2">
  <br>
  <br>
     <!--alert--> 

        <div class="container">

            <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Hello reader!</strong> If you want to be up to date every day, then sign up for our newsletter! <a href="register.php" class="alert-link">Sign up here!</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

         </div>
    

         <main>
    <section class="containerr">
        <div class="row">
            <div class="col-50 text-left">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše mail">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
                <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 

                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        //ak metóda vráti TRUE
                        if($login_success == true){
                            header('Location: admin.php');
                            die;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }

                    }
                ?>
            </div>
        </div>
    </section> 
</main>

    
</body>

    <!--copyright--> 
    <?php
include_once('partials/footer.php');
?>