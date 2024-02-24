<?php 
include("header.php");
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if items array is set and not empty
    if (isset($_POST['items']) && !empty($_POST['items'])) {
        // Prepare a prepared statement
        $stmt = $conn->prepare("INSERT INTO Cart (description, price) VALUES (?, ?)");

        // Bind parameters to the prepared statement
        $stmt->bind_param("ss", $description, $price);

        foreach ($_POST['items'] as $items) {
            // Validate input (e.g., check if description and price are provided)
            if (isset($items['description']) && isset($items['price'])) {
                $description = $items['description'];
                $price = $items['price'];

                // Execute the prepared statement
                if ($stmt->execute()) {
                    echo "New record added for item: $description<br>";
                } else {
                    echo "Error inserting item: $description<br>";
                }
            } else {
                echo "Invalid item data received<br>";
            }
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "No items to insert";
    }
} else {
    echo "Invalid request method";
}

$conn->close();
include("footer.php");
?>


<?php
// $servername = "localhost"; // Replace with your MySQL server hostname
// $username = "bbcap23_26";     // Replace with your MySQL username
// $password = "Is73JdUf";     // Replace with your MySQL password
// $dbname = "wp_bbcap23_26";       // Replace with the name of your MySQL database

// // Create a database connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
