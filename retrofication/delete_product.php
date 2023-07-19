<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retro-orders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$productId = $_POST['id'];

// SQL query to delete the product from the database
$sql = "DELETE FROM orders WHERE id = $productId";

if ($conn->query($sql) === true) {
  echo "Product deleted successfully.";
} else {
  echo "Error deleting product: " . $conn->error;
}

// Close database connection
$conn->close();
?>
