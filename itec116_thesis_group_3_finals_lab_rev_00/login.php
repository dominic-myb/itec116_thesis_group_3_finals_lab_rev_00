<?php 
    $pageTitle = "Login";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "app/includes/html/html.head.php";?> 
<body>
<?php include "app/includes/components/header.php";?>
<div class="container">
  <div class="d-flex col-12 flex-row flex-wrap align-items-center justify-content-center p-4">
    <div class="d-flex col-12 col-sm-8 col-lg-4 flex-wrap align-items-center justify-content-center border rounded-4 bg-white p-4 shadow-lg">
      <form id="login-form">
        <div class="mb-4">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div style="margin-y:0.5rem;">&nbsp</div>
        <button type="button" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
    
  </div>
<?php include "app/includes/components/footer.php"; ?>
</body>
</html>
