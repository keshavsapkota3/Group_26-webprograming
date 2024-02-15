<?php
 include("header.php");
if (isset($_POST['submit'])) {

    $username1 = $_POST['username1'];     
    $password1 = $_POST['password1'];     
   

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO Users (username1, password1)
            VALUES ('$username1', '$password1')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<p style='margin-top:100px; margin-bottom:100px; justify-content:center; margin-left:20%; font-size:50px; color:skyblue;'>  Thank you for regestring with us <br>
                   Don't forget to grab the discount ! ALE! ALE! </p>";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

include("footer.php");
?>