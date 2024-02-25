<?php
include("header.php");
?>


  <body class="body">
    
  
<form class="form" id="complaintForm">
        <h2>Product Complaint Form</h2>
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required>

        <label for="complaintIssue">Complaint Issue:</label>
        <textarea id="complaintIssue" name="complaintIssue" rows="4" required></textarea>

        <input type="submit" value="Submit Complaint">
    </form>

    </body>

    <?php
    include("footer.php");
    ?>
    