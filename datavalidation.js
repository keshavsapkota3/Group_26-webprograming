
// for the cart 

var forms = document.querySelectorAll(".addItems");

forms.forEach(function(form) {
    form.addEventListener("submit", function(event) {
        event.preventDefault(); 
        
    
        var formData = new FormData(this);
        
    
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "Cart.php", true);
        ;
        xhr.onload = function() {
            if (xhr.status === 200) {
                
                console.log(xhr.responseText);
            } else {
               
                console.error("Error:", xhr.statusText);
            }
        };
        xhr.onerror = function() {
            console.error("Request failed");
        };
        xhr.send(formData);
    });
});


// for the login page 

var forms = document.querySelectorAll("#loginhehe");

forms.forEach(function(form) {
    form.addEventListener("submit", function(event) {
        event.preventDefault(); 
        
    
        var formData = new FormData(this);
        
    
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "Cart.php", true);
        ;
        xhr.onload = function() {
            if (xhr.status === 200) {
                
                console.log(xhr.responseText);
            } else {
               
                console.error("Error:", xhr.statusText);
            }
        };
        xhr.onerror = function() {
            console.error("Request failed");
        };
        xhr.send(formData);
    });
});
