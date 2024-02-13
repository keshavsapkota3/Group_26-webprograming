<?php
include './db.php'; 


$product_id = isset($_POST['product_id']) ? (int) $_POST['product_id'] : 0;
$feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';


$sql = "INSERT INTO product_reviews (product_id, review, review_time) VALUES (?, ?, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $product_id, $feedback);

if ($stmt->execute()) {
    // Feedback submitted successfully
    $stmt->close();
    $conn->close();
    

    header("Location: feedback_page.php?product_id=" . $product_id);
    exit; 
} else {
    // Handle error here
    echo "Error submitting feedback: " . $conn->error;
    $stmt->close();
    $conn->close();
}
?>
