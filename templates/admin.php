<?php
include('partials/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?>
<body class="body p-2">
    <br>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">

                <?php
                    if($_SESSION['is_admin']==1){
                        echo "<h1>Admin rozhranie</h1>";

                        include('partials/admin-history.php');
                        //include('partials/admin-history.php');
                    }

                ?>
                
            </div>
        </div>
    </section> 
</main>
</body>

<?php
    include('partials/footer.php');
?>