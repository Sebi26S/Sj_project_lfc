<?php
include('partials/header.php');
?>

<body>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
              
                <?php
                    unset($_SESSION['logged_in']);
                    header('Location: login.php');
                ?>
            </div>
        </div>
    </section> 
</main>
</body>

<?php
    include('partials/footer.php');
?>