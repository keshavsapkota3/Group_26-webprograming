<?php

include_once 'db.php';


$product_id = $_POST['id'];
$name = $_POST['product_name'];
$original_price = $_POST['original_price'];
$sale_price = $_POST['sale_price'];
$quantity_available = $_POST['quantity'];

// Insert flash sale products into our database
$sql = "INSERT INTO flash_sales (id, product_name, original_price, sale_price, quantity)
        VALUES ('$id', '$product_name', '$original_price', '$sale_price', '$quantity')";
        
if (mysqli_query($conn, $sql)) {
    echo "Flash sale product added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
