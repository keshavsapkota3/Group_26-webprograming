<?php
include("header.php");
?>


<!-- login page body start  -->
<div class="container">
  <div class="login-container">
     <h4 class="text-center mb-4">Register with us</h4>
        <form action="signupprocess.php" method="POST">
      
            <div class="form-group">
               <input type="text" class="form-control mb-1" id="FirstAndLastName" name="FandLName" placeholder="First and Last Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control mb-1" id="PhoneNumber" name="pNumber" placeholder="PuheliNumero">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="username1" placeholder="Email address">
            </div>
           <div class="form-group">
       
              <input type="password" class="form-control mb-1" id="password" name="password1" placeholder="Password">
            </div>
            <div class="ml-5">
             <button  type="submit" name="submit"  class="btn btn-primary">Sign Up</button>
            </div>
       </form>
    </div>
</div>
<!-- login page body end  -->
<?php
include("footer.php");
?>
