<?php
// what to do with the data

if (isset($_POST["submit"])) {
    $f_name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['password'];
    


// connect to database
include 'db.php';

// insert sql statement

$sql = "insert into customers(name, email, phone_number, address)
        values ('$username', '$email', '$password')";

if ($conn->query($sql)===TRUE) {
    echo "Successful";
}
else {
    echo "Error:" .$sql . "<bt>" . $conn->error;
}

// close database connection

$conn->close();
}
?>