<?php 
    $pageTitle = "Login"
    $LOGIN_CSS = "assets/css/login.css";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "app/includes/html/html_head.php";?> 
<body>
<?php include "app/includes/components/header.php";?>
<div class="login-container">
    <h2>Login</h2>
    <form action="#" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>
<?php include "app/includes/components/footer.php"; ?>
</body>
</html>
