<?php
//what to do with the data
id (isset ($_POST['submit'])){
$id = $_POST['id'];
$productName = $_POST['product_name'];
$original_price = $_POST['original_price'];
$saleprice = $_POST['sale_price'];
$quantity = $_POST['quantity'];

// connect to the database server
include 'db.php';

// write sql statement to insert data
$sql = "insert into flash_sales(id, product_name, original_price, sale_price, quantity)
values ('$id', '$productName', '$original_price', '$saleprice', '$quantity')";


if ($conn->query ($sql)===TRUE) {
    echo "Your data was recorded";
}
else {
    echo "error :" .$sql . "<br>" . $conn->error;
}
//close the database connection
$conn->close();
}