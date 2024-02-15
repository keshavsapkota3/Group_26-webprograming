<?php
include 'db.php';
include 'header.php';

$totalPrice = 0;
$finalprice=0;
$discount=0;

// Check if form is submitted
if (isset($_POST['submit'])) {
    // accessing username and password from the form
    $username2= $_POST['username'];
    $password2 = $_POST['password'];

    // Check if the username and password match  in the database
    $sql = "SELECT * FROM Users WHERE username1 = '$username2' AND password1 = '$password2'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found in the database, apply 10% discount
        $discount = 0.1;
        echo "Congratulations! You've received a 10% discount.";
    } else {
        echo "Invalid username or password.";
    }
}

// Check if delete button is clicked and item_id is set
if (isset($_POST['delete']) && isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];

    $sql = "DELETE FROM Cart WHERE id = $item_id";
    if ($conn->query($sql) === TRUE) {
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
           $discount=$discount*$totalPrice;
        // Calculate final price after applying discount
        $finalprice = $totalPrice - $discount;

        echo "</tbody>
              <tfoot>
                  <tr>
                      <td colspan='2'>Total Price:</td>
                      <td>{$totalPrice} €</td>
                      <td>Discount:</td>
                      <td>{$discount} €</td>
                      <td>Final Price:</td>
                      <td>{$finalprice} €</td>
                  </tr>
              </tfoot>
              </table>";


              echo"<p style='margin-left:30%;'>  If you are member then grab the discount <h2 style='margin-left:30%;'> Ale 😊 Ale 😊</h2></p>";
                      // Display the form for username and password input
echo "<form action='" . $_SERVER['PHP_SELF'] . "' class='form-control' style='margin-top: 20px;'>
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
include 'footer.php';
?>
