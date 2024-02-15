<?php 
 include("header.php");



if (isset($_POST['items'])) {
    include 'db.php'; 

    foreach ($_POST['items'] as $item) {
        $description = $item['description'];
        $price = $item['price'];

        $sql = "INSERT INTO Cart (description, price) VALUES ('$description', '$price')";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "New record added for item: $description<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "No items to insert";
}





include("footer.php");

?>