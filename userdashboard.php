<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard - Account Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(to bottom, #b8ffd0, #ecff9f);
    }
    
    h1 {
      text-align: center;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    
    table th,
    table td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }
    
    table th {
      background-color: #f0f0f0;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      color: #fff;
      background-color: #4CAF50;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>User Dashboard - Account Details</h1>
  
  <h2>User Information</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Email ID</th>
    </tr>
    <tr>
      <td id="name"></td>
      <td id="email"></td>
    </tr>
  </table>
  
  <h2>User Orders</h2>
  <table>
    <tr>
      <th>Order ID</th>
      <th>Product</th>
      <th>Quantity</th>
    </tr>
    <tr>
      <td id="order1_id"></td>
      <td id="order1_product"></td>
      <td id="order1_quantity"></td>
    </tr>
    <tr>
      <td id="order2_id"></td>
      <td id="order2_product"></td>
      <td id="order2_quantity"></td>
    </tr>
    <!-- Add more rows for additional orders if needed -->
  </table>
  
  <br></br><br></br>
  <center><a class="button" href="http://localhost/GreenWheels/">BACK TO HOME</a></center>
  <br></br><br></br>
  <center><a class="button" href="http://localhost/GreenWheels/loginsystem/login_form.php">LOG OUT</a></center>
  <script>
    // Replace the following variables with actual data from your backend
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "retro-orders";
  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    session_start();

    $sql2 = "SELECT * FROM orders";
  $result = mysqli_query($conn, $sql2);

  if ($result->num_rows > 0) {
    // Output each product as a cart item
    while ($row = $result->fetch_assoc()) {
      $productId = $row['id'];
      $productName = 'Retrofication Request';
    }
  }
    ?>
    var user = {
      name: "<?php echo $_SESSION['user_name'];?>",
      email: "<?php echo $_SESSION['email'];?>",
      order1_id: "<?php echo $productId;?>",
      order1_product: "<?php echo $productName;?>",


    };
    
    var orders = [
      {
        id: "",
        product: "",
        quantity: ""
      },
      {
        id: "",
        product: "",
        quantity: ""
      }
      // Add more objects for additional orders if needed
    ];
    
    // Update user information
    document.getElementById("name").textContent = user.name;
    document.getElementById("email").textContent = user.email;
    
    // Update order information
    document.getElementById("order1_id").textContent = orders[0].id;
    document.getElementById("order1_product").textContent = orders[0].product;
    document.getElementById("order1_quantity").textContent = orders[0].quantity;
    
    //document.getElementById("order2_id").textContent = orders[1].id;
    document.getElementById("order2_product").textContent = orders[1].product;
    document.getElementById("order2_quantity").textContent = orders[1].quantity;
  </script>
</body>
</html>
