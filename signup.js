function validateForm() {
   
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
  

  
    document.getElementById('usernameerror').innerHTML = 'Please enter your username';
    document.getElementById('emailerror').innerHTML = 'Enter a correct password';
    document.getElementById("passworderror").innerHTML = 'Enter a correct password';

  
    if (username.trim() === '') {
      document.getElementById('usernameerror').innerHTML = 'Username is required';

      return false;
    }

    if (email.trim() === ""|| !email.includes("@")) {
      document.getElementById('emailerror').innerHTML = 'Username is required';
      
      return false;
    }

    
    if (password.trim() === '') {
      document.getElementById('passworderror').innerHTML = 'Password is required';
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