<?php
// Include the database connection file
include("header.php");
include("db.php");

if (isset($_POST['submit'])) {
    // Retrieve the username and email entered by the user
    $username = $_POST['username1'];
    $password = $_POST['password1'];

    // Define an SQL query to check if there is a record matching both the username and email
    $sql = "SELECT * FROM Users WHERE username1 = '$username' AND password1 = '$password'";

    // Execute the SQL query using the database connection
    $result = $conn->query($sql);

    // deleting user account


    if (isset($_POST['delete']) && isset($_POST['item_id'])) {
        $item_id = $_POST['item_id'];
    
        $sql = "DELETE FROM Users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $item_id);
        
        if ($stmt->execute()) {
            echo "You finally  deleted your account <br> now can grab discount sign up to grab it  😊";
        } else {
            echo "Error deleting item: " . $conn->error;
        }
    }

    


    // Check if any rows were returned (i.e., if a match was found)
    if ($result->num_rows > 0) {
        // Fetch the matched row (assuming username and email are unique)
        $row = $result->fetch_assoc();
        
        // Display a message indicating successful login
        echo "<h1 style='margin-left:10%'>You are logged in as: <span style='font-family: Arial, sans-serif;'>" . $row['username1'] . "</span></h1>";
        echo "<button onclick='toggleProfile()' style='margin-left:10%;' class='btn btn-primary'>View Profile</button>";

        // Display user profile details (initially hidden)
        echo "<div id='profileDetails' style='display: none; margin-left: 10%;'>";
        echo "<h2>Profile Details</h2>";
        echo "<p style='font-size:16px; font-weight:bold;'>Username:             " . $row['username1'] . "</p>";
        echo "<p style='font-size:16px; font-weight:bold;'>First & last Name  :  " . $row['FandLname'] . "</p>";
        echo "<p style='font-size:16px; font-weight:bold;'>Phone Number :        " . $row['pNumber'] . "</p>";
       
       
       
        // deleting username 
        
        echo " <form action='' method='post'>
        <input type='hidden' name='item_id' value='{$row['id']}'>
        <button type='submit' name='delete' style='margin-left:0%;' class='btn btn-primary'>Delete Account</button>
     </form>";
        

        echo "</div>";

    } else {
        // Display an error message if no match was found
        echo "<p style='color:red; font-weight:bold; font-size=25px; margin-left:10%;'>Your username or password is incorrect</P>";
    }

    // Close the database connection
    $conn->close();
}
include("footer.php");
?>
<script>
    function toggleProfile() {
    var profileDetails = document.getElementById('profileDetails');
    if (profileDetails.style.display === 'none') {
        profileDetails.style.display = 'block';
    } else {
        profileDetails.style.display = 'none';
    }
}




</script>
