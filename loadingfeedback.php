 <?php
include './db.php';


$sql = "SELECT COUNT(*) AS review_count FROM product_reviews WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


if ($row) {
    echo "<a  href='feedback_page.php?product_id=" . $product_id . "' style='color:black;'><p>feedback: " . $row['review_count'] . "</p></a>";
} else {
    echo "<p>feedback: 0</p>";
}
?>