<!DOCTYPE html>
<html>
<head>
  <title>Car Modification Cart</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    .cart-item {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }

    .cart-item-summary {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }

    .cart-item-details {
      display: none;
      margin-top: 10px;
      padding: 10px;
      background-color: #f9f9f9;
    }

    .cart-item-details.active {
      display: block;
    }

    .delete-button {
      background-color: #e74c3c;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
    }

    .payment-button {
      background-color: #2ecc71;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
  <script>
    function toggleDetails(index) {
      var detailsElement = document.getElementById('details-' + index);
      detailsElement.classList.toggle('active');
    }

    function emptyCart() {
      // Add logic to empty the cart
      alert('Cart emptied successfully!');
    }

    function makePayment() {
      // Add logic to process the payment
      alert('You Will Be Redirected to Razorpay Website!');
    }
  </script>

<script>
  function deleteProduct(productId) {
    if (confirm('Are you sure you want to delete this product?')) {
      // Send an AJAX request to the PHP script
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'delete_product.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          alert(xhr.responseText); // Display the response from the PHP script
          // You can also update the cart view dynamically here if needed
        }
      };
      xhr.send('id=' + id);
    }
  }
</script>

</head>
<body>
  <h1>Car Modification Cart</h1>

  <?php
  // Database connection
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

  //storing order into database
  session_start();
  if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $vtype = $_POST['VehicleType'];
    $vyear = $_POST['VehicleModelYear'];
    $vbrand = $_POST['VehicleBrand'];
    $vmodel = $_POST['VehicleModel'];
    $km = $_POST['KilometersDriven'];
    $retroType = $_POST['Typeofretrofication'];
    $speed = $_POST['Topspeed'];
    $range = $_POST['Range'];
    $city = $_POST['City'];
    $name = $_POST['name'];
    $mob = $_POST['ph'];
    $add = $_POST['add'];
    $retrofitter = $_POST['option'];


    //image variables

    $frName = $_FILES['blc']['name'];
    $frSize = $_FILES['blc']['size'];
    $frTempName = $_FILES['blc']['tmp_name'];

    $frDF = 'upload/'.$frName;
    move_uploaded_file($frTempName, $frDF);

    $brName = $_FILES['od']['name'];
    $brSize = $_FILES['od']['size'];
    $brTempName = $_FILES['od']['tmp_name'];

    $brDF = 'upload/'.$brName;
    move_uploaded_file($brTempName, $brDF);

    $sql = "insert into orders values ('$id', '$vtype', '$vyear','$vbrand', '$vmodel', '$km', '$retroType', '$speed', '$range', '$city', '$frDF', '$brDF', '$name', '$mob', '$add', '$retrofitter', 'no')";
    // $sql = "insert into sellercarinfo (`lplate_no`, `state`, `vin_no`, `year`, `make`, `trim`, `type`, `model`, `milegae`, `zip`, `frc`, `flc`, `brc`, `blc`, `op`, `keys`, `owner`, `condition`, `fname`, `lname`, `mobile`, `email`, `contact_time`) values ('$lplate', '$state', '$vin','$year', '$make', '$trim', '$type', '$model', '$mileage', '$zip', '$frc', '$flc', '$brc', '$blc', '$od', '$keys', '$own', '$condition', '$fname', '$lname', '$mobile', '$email', '$time')";
    if (mysqli_query($conn, $sql)) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

  }

  // Fetch products from the database
  $sql2 = "SELECT * FROM orders";
  $result = mysqli_query($conn, $sql2);

  if ($result->num_rows > 0) {
    // Output each product as a cart item
    while ($row = $result->fetch_assoc()) {
      $productId = $row['id'];
      $productName = 'Retrofication Request';
     $productDescription = $row['retrofitter'];
      ?>
      <div class="cart-item" onclick="toggleDetails(<?php echo $productId; ?>)">
        <div class="cart-item-summary">
          <h3><?php echo $productName; ?></h3>
          <a href="#" class="delete-button" onclick="deleteProduct(<?php echo $productId; ?>)">Delete</a>

</form>
        </div>
        <div class="cart-item-details" id="details-<?php echo $productId; ?>">
          <p><?php echo 'Retrofitter Selected '.$productDescription; ?></p>
          <p><?php echo 'Vehicle Type '.$row['vtype']; ?></p>
          <p><?php echo 'Vehicle Model '.$row['vmodel']; ?></p>
          <p><?php echo 'Vehicle Brand '.$row['vbrand']; ?></p>
          <p><?php echo 'Front Pic <img src="' . $row['front'] . '" height="150px" width="150px">'; ?></p>
          <p><?php echo 'Back Pic <img src="' . $row['back'] . '" height="150px" width="150px">'; ?></p>

        </div>
      </div>
      <?php
    }
  } else {
    echo "No products found.";
  }

  // Close database connection
  $conn->close();
  ?>

  <button class="payment-button" onclick="emptyCart()">Empty Cart</button>
  <a href="https://rzp.io/l/RpJumGGspx" target="_blank"><button class="payment-button" onclick="makePayment()">Proceed to Payment</button></a>


