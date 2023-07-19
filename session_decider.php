<?php
session_start();

// Check if the session variable is set
if (isset($_SESSION['user_type'])) {
  // Redirect based on the user type
  if ($_SESSION['user_type'] == 'retrofitter') {
    header("Location: http://localhost/GreenWheels/retrofiiterdashboard.php");
    exit();
  } elseif ($_SESSION['user_type'] == 'user') {
    header("Location: http://localhost/GreenWheels/userdashboard.php");
    exit();
  }
}

// If no session is created or user type is not recognized, redirect to the login page
header("Location: http://localhost/GreenWheels/loginsystem/login_form.php");
exit();
?>
