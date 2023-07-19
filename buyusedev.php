<!DOCTYPE html>
<html>
<head>
  <title>Buy Used EV Vehicle</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #78FF80;
  margin: 0;
  padding: 20px;
}

h1 {
  text-align: center;
}

.product {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
  cursor: pointer;
  background-color: #fff;
  transition: background-color 0.3s ease;
}

.product:hover {
  background-color: #f9f9f9;
}

.product .image {
  flex: 0 0 150px;
  margin-right: 10px;
}

.product .image img {
  width: 100%;
  height: auto;
}

.product .details {
  flex: 1;
  text-align: left;
}

.product .details h3 {
  margin-top: 0;
  margin-bottom: 5px;
  font-size: 20px;
}

.product .details p {
  margin: 0;
  font-size: 14px;
}

.product .call-button {
  flex: 0 0 150px;
  text-align: center;
}

.product .call-button a {
  display: inline-block;
  padding: 8px 15px;
  background-color: #4CAF50;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.product .call-button a:hover {
  background-color: #45a049;
}

.product .description {
  display: none;
  padding: 10px;
  font-size: 14px;
  background-color: #f9f9f9;
}

  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.product').click(function() {
        $(this).find('.description').slideToggle();
      });
    });
  </script>
</head>
<body>
  <h1>Buy Used EV Vehicle</h1>

  <?php
    // Your database connection code here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sellev";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


    $sql = "SELECT * FROM sellercarinfo";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo '<div class="image"><img src="' . $row['flc'] . '" alt="Vehicle Image"></div>';
        echo '<div class="details">';
        echo '<h3>' . $row['model'] . '</h3>';
        echo '<p>Year: ' . $row['year'] . '</p>';
        echo '<p>Owner Name: ' . $row['fname'] ." ". $row['lname'] .'</p>';
        echo '<div class="description">';
        echo '<p>' . $row['vin_no'] . '</p>';
        echo '<p>Mileage: ' . $row['milege'] . '</p>';
        echo '<p>State: ' . $row['state'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="call-button"><a href="tel:' . $row['mobile'] . '">Call Now</a></div>';
        echo '</div>';
      }
    } else {
      echo '<p>No products found.</p>';
    }

    $conn->close();
  ?>

</body>
</html>