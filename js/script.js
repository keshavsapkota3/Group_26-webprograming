function toggleMenu() {
    var menu = document.getElementById("popupMenu");
    var icon = document.getElementById("icon");
    if (menu.style.display === "block") {
        menu.style.display = "none";
        icon.style.display = "block";
    } else {
        menu.style.display = "block";
        icon.style.display = "none";
    }
}

// Close the menu when clicking outside of it
document.addEventListener('click', function(event) {
    var menu = document.getElementById("popupMenu");
    var icon = document.getElementById("icon");
    var isClickInsideMenu = menu.contains(event.target);
    var isClickInsideIcon = icon.contains(event.target);
    if (!isClickInsideMenu && !isClickInsideIcon) {
        menu.style.display = "none";
        icon.style.display = "block";
    }
});





// This code is for the see the user profile 
function toggleProfile() {
    var profileDetails = document.getElementById('profileDetails');
    if (profileDetails.style.display === 'none') {
        profileDetails.style.display = 'block';
    } else {
        profileDetails.style.display = 'none';
    }
}