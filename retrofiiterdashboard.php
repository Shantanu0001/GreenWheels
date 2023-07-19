<!DOCTYPE html>
<html>
<head><title>Retrofitter - Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(to bottom, #b8ffd0, #ecff9f);
    }
    .container {
      display: flex;
      justify-content: center;
    }

    .box {
      width: 200px;
      height: 200px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
      font-size: 20px;
      color: white;
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

    #new-order {
      background-color: blue;
      margin-right: 20px; /* Adjust the right margin */
    }

    #payment-left {
      background-color: green;
      margin-right: 20px; /* Adjust the right margin */
    }

    #total-earning {
      background-color: orange;
    }
    h1 {
      font-family: "Arial", sans-serif;
      font-size: 36px;
      color: #333;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 30px;
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
    <h1>RETROFITTER DASHBOARD</h1><br></br>
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
  <br></br><br></br>
  <div class="container">
    <div id="new-order" class="box">
      <span>New Order</span>
      <span id="new-order-counter" style="font-size: xx-large;">0</span>
      <a href="#"><button type="button" id="order-details" style="color: rgb(0, 0, 0); font-size: small; font-weight: bolder;">Order Details</button></a>
    </div>

    <div id="payment-left" class="box">
      <span>Payment Left</span>
      <span id="payment-left-counter" style="font-size: xx-large;">0</span>
      <a href="#"><button type="button" id="payment-request" style="color: rgb(0, 0, 0); font-size: small; font-weight: bolder;">Request Payment</button></a>
    </div>

    <div id="total-earning" class="box">
      <span>Total Earning</span>
      <span id="total-earning-counter" style="font-size: xx-large;">0</span>
    </div>
  </div>
  <br></br><br></br>
  <center><a class="button" href="http://localhost/GreenWheels/">BACK TO HOME</a></center>
  <br></br><br></br>
  <center><a class="button" href="http://localhost/GreenWheels/loginsystem/login_form.php">LOG OUT</a></center>

  <script>
    // Replace the following variables with actual data from your backend
    <?php
    session_start();
    ?>
    var user = {
      name: "<?php echo $_SESSION['user_name'];?>",
      email: "<?php echo $_SESSION['email'];?>"
    };

    document.getElementById("name").textContent = user.name;
    document.getElementById("email").textContent = user.email;
    </script>
</body>
</html>
