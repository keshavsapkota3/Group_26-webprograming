
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- 如果使用Bootstrap -->
    <link rel="stylesheet" href="css/styles.css"> <!-- 你的自定义样式 -->
    <!-- 可以在这里或styles.css文件中添加下面的CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .review, .feedback-form {
            width: 60%; /* 调整为合适的宽度 */
            text-align: center;
            margin-top: 20px;
        }
        .review-time {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>



<?php
include './db.php';

$product_id = isset($_GET['product_id']) ? (int) $_GET['product_id'] : 0;

$sql = "SELECT * FROM product_reviews WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<div class='review'><p>" . $row['review'] . "<br><span class='review-time'> by Username     " . $row['review_time'] . "</span></p></div>";
}
?>



<div class="feedback-form">
    <form action="submit_feedback.php" method="post">
        <textarea name="feedback" rows="4" placeholder="Write your feedback here..." required></textarea><br>
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"> 
        <button type="submit">Submit Feedback</button>
    </form>
</div>


</body>
</html>
