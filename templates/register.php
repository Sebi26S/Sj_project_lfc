<?php
include_once('partials/header.php');
?>
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
  

    

    <script src="../js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<?php
include_once('partials/footer.php');
?>

