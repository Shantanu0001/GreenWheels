<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sell EV</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
        <!---we had linked our css file----->
        <link rel="stylesheet" href="./assets/css/prview.css">
        <!-- <link rel="stylesheet" href="./assets/css/style-prefix.css"> -->
        <!--
        - favicon
      -->
      <link rel="stylesheet" href="./assets/css/style-prefix.css">
        <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
        <!-- icofont-icon link -->
        <link rel="stylesheet" href="/EEVs/Icofont-icons/icofont.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Bootsrap-cdn -->
        <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--
        - google font link
      -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
</head>
<?php
require_once('header.php');
?>

<body style="background-image: linear-gradient(rgba(36, 36, 34, 0.4),rgba(255, 33, 33, 0.4)),url(call-car.jpg); background-position: center;
background-size: cover; ">
    <div id='login-form'class='login-page'>
        <div class="form-box" id="main-form">
            <div class='button-box' >
                <div id='btn'></div>
                <button type='button'onclick='by_plate()'class='toggle-btn' >By Plate&nbsp; &nbsp; &nbsp; &nbsp; By VIN&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; By Make</button>
                <button type='button'onclick='by_vin()'class='toggle-btn'></button>
                <button type='button'onclick='by_make()'class='toggle-btn' ></button>
            </div>
            <form method='post' action='thankpage.php' enctype='multipart/form-data'>
              <div id='by_plate' class='input-group-by_plate'>
                <input name= 'lplate' type='text' id='lplate' class='input-field'placeholder='Licence Plate*' required >
        <select class='input-field'placeholder='State' value="State" name="state" id='state' required>
            <option value="" disabled selected>State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
        </select>
        <button type='button'class='submit-btn' name='formbtn1' id='formbtn1' onclick='next()'>Next</button>
</div>

      
     <div id='by_vin' class='input-group-by_vin' ><br><br>
         <input type='text' name='vin' id='vin' class='input-field'placeholder='VIN Number' required>
         <input type='text' name='trim' id='trim' class='input-field'placeholder='Trim ' required>
                <button type='button'class='submit-btn' name='formbtn2' id='formbtn2' onclick='next2()'>Next</button>
    </div>
         <div id='by_make' class='input-group-by_make' ><br><br><br>
            <select class='input-field'placeholder='Year' name='year' id='year' name="year" required>
                <option value="" disabled selected>Year</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            <input type='text' name='make' id='make' class='input-field'placeholder='Make ' required>
            <input type='text' name='model'id='model' class='input-field'placeholder='Model ' required>
            <input type='text' name='type' id='type' class='input-field'placeholder='Type ' required>

                   <button type='button' id='finalbtn' class='submit-btn' name='finalbtn' onclick='f1finalbtn()'>Look Up Your Car</button>
          </div>
                    
        </div>
 

<div id="secondform" class="login-page" style="background:rgba(238, 255, 0, 0.6); width:75%; position: relative; padding:10px; overflow: hidden; margin:2% auto; visibility: hidden;"  >
    <div id="by_details">
        <label for="mileage" class="ques"> How many miles are displayed on your odometer? *: </label>
        <input type="text" name="mileage" id="mileage" placeholder="Mileage" class="input-field">

        <label for="zip" class="ques"> What is your ZIP Code? *: </label>
        <input type="text" name="zip" id="zip" placeholder="Zip Code" class="input-field">

        <label id="photo" class="ques"> Upload Your Car photos *: </label><br><br>
        <div class="piccontainer" style="width: 100%;">
        <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="frc" style="cursor: pointer;" >
              Front Right Corner <br/>
              <i class="fa fa-2x fa-camera"></i>
              <input name='frc' id="frc" type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName1"></span>
              <br>
            </label>
          </div>
          <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="flc" style="cursor: pointer;" >
              Front Left Corner <br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="flc" name='flc' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName2"></span>
              <br>
            </label>
          </div>
          <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="brc" style="cursor: pointer;" >
              Back Right Corner <br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="brc" name='brc' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName3"></span>
              <br>
            </label>
          </div>
          <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="blc" style="cursor: pointer;" >
              Back Left Corner <br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="blc" name='blc' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName4"></span>
              <br>
            </label>
          </div>
          <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="od" style="cursor: pointer;" >
              Odometer Photo<br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="od" name='od' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName5"></span>
              <br>
            </label>
          </div>
        </div>
          <br><br><br><br><br><br><br><br><br>
          
          <label id="keys" class="ques"> How many keys do you have? *: </label><br><br>
          <select class='input-field'placeholder='keys' id='keys' name="keys" required>
            <option value="" disabled selected>Select no. of Keys</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3 or more</option>
            </select>

            <label id="own" class="ques"> Are you the original owner? *: </label><br><br>
          <select class='input-field'placeholder='own'id='own' name="own" required>
            <option value="" disabled selected>Select Yes/No</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>

            <label id="condition" class="ques"> Select Car Condition*: </label><br><br>
          <select class='input-field' id='condition' placeholder='condition' name="condition" required>
            <option value="" disabled selected>Select the most appropiate</option>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
            </select>
          
            <button type='button' id='nextformtwo' name='nextformtwo' class='submit-btn2' onclick='fnextbtn()'>Next</button>
</div>
</div>

<div id="tform" class="login-page" style="background:rgba(58, 255, 133, 0.6); width:35%; position: relative; padding:10px; overflow: hidden; margin:2% auto; display:none;"  >
<div id="main_details" >
  <label for="fname" class="ques">First Name*: </label>
  <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="input-field" required><br><br>
  
  <label for="lname" class="ques">Last Name*: </label>
  <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="input-field" required><br><br>

  <label for="mobile" class="ques">Mobile Number*: </label>
  <input type="text" name="mobile" id="mobile" placeholder="Enter 10 Digit Mobile Number" class="input-field"  required>
  <!---
  <input type="button" class="btnSubmit" value="Send OTP" onClick="sendOTP();"><br><br>
  
   <div style='display:none'>     
  <input type="text" name="otp" id="mobileOtp" placeholder="Enter OTP" class="input-field"  required>
  <input type="button" class="btnSubmit" value="Verify Otp" onClick="verifyOtp();"><br><br>
</div> --->
  <label for="email" class="ques">Email*: </label>
  <input type="email" name="email" id="email" placeholder="Enter Valid Email Id" class="input-field" required><br><br>

  <label for="time" class="ques">Best Time To Contact*: </label>
  <select class='input-field'id='time' placeholder='time' name="time" required>
    <option value="" disabled selected>Select Best Time You Are Free To Take Calls</option>
    <option value="Morning [9am - 12pm]">Morning [9am - 12pm]</option>
    <option value="Afternoon [12pm-4pm]">Afternoon [12pm-4pm]</option>
    <option value="Evening [4pm-6pm]">Evening [4pm-6pm]</option>
    </select>

    <button type='submit' class='submit-btn2' name='submit' id="finalSub">List Your Car</button>
</div>
</div>
</form>
</div>

<script>
  
    let input1 = document.getElementById("frc");
        let imageName = document.getElementById("imageName1")

        input1.addEventListener("change", ()=>{
           
            imageName.innerText = "Uploaded!";
        })
      </script>

    <script>
      function lastsubmit(){
        document.querySelector('form').submit();
      }
    </script>
<script> 
  let input2 = document.getElementById("flc");
      let imageName2 = document.getElementById("imageName2")

      input2.addEventListener("change", ()=>{
        imageName2.innerText = "Uploaded!";
      })
      
</script>

<script> 
  let input3 = document.getElementById("brc");
      let imageName3 = document.getElementById("imageName3")

      input3.addEventListener("change", ()=>{
        imageName3.innerText = "Uploaded!";
      })
      
</script>

<script> 
  let input4 = document.getElementById("blc");
      let imageName4 = document.getElementById("imageName4")

      input4.addEventListener("change", ()=>{
        imageName4.innerText = "Uploaded!";
      })
      
</script>

<script> 
  let input5 = document.getElementById("od");
      let imageName5 = document.getElementById("imageName5")

      input5.addEventListener("change", ()=>{
        imageName5.innerText = "Uploaded!";
      })
      
</script>

<!-- Form Flow JS !-->

<script>
    var x=document.getElementById('by_plate');
    var y=document.getElementById('by_vin');
    var r=document.getElementById('by_make');
    var z=document.getElementById('btn');
    var nextbtn = document.getElementById('formbtn1');
    var nextbtns = document.getElementById('formbtn2');
    var fbox = document.getElementById('form-box');
    
    function next()
    {
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
        r.style.left='450px'
    }
    function next2()
    {
        x.style.left='-750px';
        y.style.left='-350px';
        z.style.left='220px';
        r.style.left='50px';
        
    }

    var f2=document.getElementById('secondform');
    function f1finalbtn()
    {
          f2.style.visibility = 'visible';
          f2.scrollIntoView({ behavior: "smooth" });
          
    }

    var zen=document.getElementById('tform');
      
      function fnextbtn()
    {
          zen.style.display = 'block';
          zen.scrollIntoView({ behavior: "smooth" });
    }
    
</script>

<script>
    var modal = document.getElementById('login-form');
    
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
<?php
require_once('footer.php');?>
</html>


<!--- PHP Code --->
