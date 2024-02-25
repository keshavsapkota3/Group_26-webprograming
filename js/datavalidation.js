var forms = document.querySelectorAll(".addItems");

forms.forEach(function(form) {
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        var formData = new FormData(this);
        
        fetch('cart.php', {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response.text();
        })
        .then(function(data) {
            console.log(data); // Handle successful response
        })
        .catch(function(error) {
            console.error('Error:', error); // Handle errors
        });
    });
});
