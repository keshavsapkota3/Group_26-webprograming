<?php
include("db.php");
include("header.php");

$totalPrice = 0;
$finalprice = 0;
$discount = 0;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        // accessing username and password from the form
        $username2 = $_POST['username'];
        $password2 = $_POST['password'];

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM Users WHERE username1 = ? AND password1 = ?");
        $stmt->bind_param("ss", $username2, $password2);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User found in the database, apply 10% discount
            $discount = 0.1;
            echo "<p style='margin-left:10%; font-size:35px; font-weight:bold;'>Congratulations! You've received a 10% discount.</p>";
        } else {
            echo "<p style=' margin-left:15%; font-size:25px; font-weight:bold; color: red;'> You are not a member withus to grab a discount!!!! <br>
            For discount signup with us by clicking login from nav</p>.";
            echo "Invalid username or password.";

        }
    }
}

// Check if delete button is clicked and item_id is set
if (isset($_POST['delete']) && isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];

    $sql = "DELETE FROM Cart WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $item_id);
    
    if ($stmt->execute()) {
        echo "Removed successfully 😊";
    } else {
        echo "Error deleting item: " . $conn->error;
    }
}

$sql = "SELECT id, description, price FROM Cart";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Items</th>
                        <th>Price in Euro €</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['price']} €</td>
                    <td>
                        <form action='' method='post'>
                            <input type='hidden' name='item_id' value='{$row['id']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";

            // Accumulate the price
            $totalPrice += $row['price'];
        }
        
        // Calculate discount amount
        $discountAmount = $totalPrice * $discount;
        
        // Calculate final price after applying discount
        $finalprice = $totalPrice - $discountAmount;

        echo "</tbody>
              <tfoot>
                  <tr>
                      <td colspan='2'>Total Price:</td>
                      <td>{$totalPrice} €</td>
                      <td>Discount:</td>
                      <td>{$discountAmount} €</td>
                      <td>Final Price:</td>
                      <td>{$finalprice} €</td>
                  </tr>
              </tfoot>
              </table>";

        echo "<p style='margin-left:30%;'>  If you are member then grab the discount <h2 style='margin-left:30%;'> Ale 😊 Ale 😊</h2></p>";

        // Display the form for username and password input
        echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post' class='form-control' style='margin-top: 20px;'>
                <label for='username' style='font-weight: bold; margin-bottom:10px;'>Username:</label>
                <input type='text' id='username' name='username' style='padding: 5px;margin-bottom:10px;'><br>
                <label for='password' style='font-weight: bold;'>Password:</label>
                <input type='password' id='password' name='password' style='padding: 5px;'><br>
                <button type='submit' name='submit' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; margin-top: 10px; margin-left: 80px;'>Apply Discount</button>
              </form>";
    } else {
        echo "No results";
    }
}

$conn->close();
include("footer.php");
?>
