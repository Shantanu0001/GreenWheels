<?php
@include "config.php";
session_start();
if(isset($_POST['submit'])){
   $uemail = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $select = " SELECT * FROM user_form WHERE email = '$uemail' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if($row['user_type'] == 'retrofitter'){
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_type'] = $row['user_type'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['id'] = $row['id'];
         header('location:\GreenWheels');
      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_type'] = $row['user_type'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['id'] = $row['id'];
         header('location:\GreenWheels');
      } 
   }else{
      $error[] = 'incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="styleauth.css">
</head>
<body>
<div id="form-container">
   <div class="left">
   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>
   </div>
   <div class="or"><p> Or</p></div> 
      <div class="right">
         <span class="loginwith">SignIn with Social</span>
         <button class="Social-signin google"> Login with google</button>
         <button class="Social-signin Twitter"> Login with twitter</button>
         <button class="Social-signin linked"> Login with LinkedIn</button>
         <button class="Social-signin facebook"> Login with facebook</button>
      </div>
</div>
</body>
</html>