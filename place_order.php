<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data from the submitted form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_mode = $_POST['payment_mode'];

    // Prepare SQL statement to insert data (name, phone, address, payment mode)
    // The `order_date` will be automatically inserted with the current timestamp
    $sql = "INSERT INTO order_manager (name, phone, address, payment_mode) VALUES (?, ?, ?, ?)";

    // Prepare the statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $name, $phone, $address, $payment_mode);

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        // Successful order placement
        echo "Order placed successfully!";
        echo "<script> alert('Order placed');window.location.href='index.php';</script>";
        
    } else {
        // Handle any errors
        echo "Error: " .$conn->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
