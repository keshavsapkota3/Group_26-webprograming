<?php
include("header.php");
?>


<!-- login page body start  -->
<div class="container">
  <div class="login-container">
    <h4 class="text-center mb-4">Log in to ElectroHub</h4>
    <form action="loginprocess.php" method="POST">
      <div class="form-group">
        <input type="email" class="form-control" id="email" name="username1" placeholder="Email address">
      </div>
      <div class="form-group">
        <input type="password" class="form-control mb-1" id="password" name="password1" placeholder="Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Log In</button>
      <div class="text-center" id="forgetpassword">
      <a href="#">Forgot password?</a>
    </div>
    </form>
    <div class="ml-5">
    <button  class="btn btn-primary"><a href="signup.php">Sign Up</a></button>
    </div>
</div>
<!-- login page body end  -->
<?php
include("footer.php");
?>
