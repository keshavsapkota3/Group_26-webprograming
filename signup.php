<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body>
<div class="cointainer">
  <form id="myForm" action="process1.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <span id="usernameError" class="error"></span>

    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="emailerror" class="error"></span>
<br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="passwordError" class="error"></span>

    <br>

    <input type="submit" value="Submit">
  </form>
</div>
  <script>
    
    function validateForm() {
   
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var email = document.getElementById('email').value;

    
      document.getElementById('usernameError').innerHTML = 'Please enter your username';
      document.getElementById('passwordError').innerHTML = 'Enter a correct password';
      document.getElementById('emailerror').innerHTML = 'Enter a correct Email';

    
      if (username.trim() === '') {
        document.getElementById('usernameError').innerHTML = 'Username is required';
        return false;
      }
      if (email.trim() === ''|| !email.trim().includes("@")) {
        document.getElementById('emailerror').innerHTML = 'email is required';
        return false;
      }

      
      if (password.trim() === '') {
        document.getElementById('passwordError').innerHTML = 'Password is required';
        return false;
      }

      return true;
    }

    document.getElementById('myForm').addEventListener('submit', function(event) {
      
      event.preventDefault();

      
      if (validateForm()) {
       
        alert('Form submitted successfully!');
      }
    });
  </script>
</body>
</html>