<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Retrofitting</title>
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
require_once('headernew.php');
?>

<body style="background-image: linear-gradient(rgba(36, 36, 34, 0.4),rgba(255, 33, 33, 0.4)),url(call-car.jpg); background-position: center;
background-size: cover; ">
    <div id='login-form'class='login-page'>
        <div class="form-box" id="main-form">
            <p style="font-size: large;align-items: center;"><centre>Retrofit your petrol vehicle to EV</p>
                --------------------- Vehicle Details---------------------
            <form action="GreenWheelsCart.php" method="post" id='select_vehicle' class='select_vehicle' target='_blank' enctype='multipart/form-data'>
                <select class="input-field" placeholder="Vehicle Type" value="VehicleType" name="VehicleType" required>
                    <option value="" disabled selected>Vehicle Type</option>
                    <option value="Car">Car</option>
                    <option value="Bike">Bike</option>
                </select>
                <select class="input-field" placeholder="Vehicle Model Year" value="VehicleModelYear" name="VehicleModelYear" required>
                    <option value="" disabled selected>Vehicle Model Year</option>
                    <option value="1990">1900</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
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
                    <option value="2011">2012</option>
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
                <select class="input-field" placeholder="Vehicle Brand" value="VehicleBrand" name="VehicleBrand" required>
                    <option value="Vehicle Brand" selected>Vehicle Brand</option>
                        <option value="" disabled>----Car----</option>
                            <option value="Tata">Tata</option>
                            <option value="Maruti">Maruti</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Ford">Ford</option>
                            <option value="Hyundai">Hyundai</option>
                        <option value="" disabled>----Bike----</option>
                            <option value="Hero">Hero</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Honda">Honda</option>
                            <option value="Harely-Davidson">Harely-Davidson</option>
                 </select>
                <select class="input-field" placeholder="Vehicle Model" value="VehicleModel" name="VehicleModel" required>
                    <option value="Vehicle Model" selected>Vehicle model</option>
                    <option value="" disabled>*-**********Car***********-*</option>
                        <option value="" disabled>----Tata----</option>
                            <option value="Nexon">Nexon</option>
                        <option value="" disabled>----Maruti----</option>
                            <option value="Swift">Swift</option>
                            <option value="800">800</option>
                            <option value="WagonR">WangonR</option>
                            <option value="Gypsy">Gypsy</option>
                        <option value="" disabled>----Toyota----</option>
                            <option value="Etios">Etios</option>
                        <option value="" disabled>----Ford----</option>
                            <option value="EcoSport">Ecosport</option>
                        <option value="" disabled>----Hyundai----</option>
                            <option value="i20">i20</option>   
                    <option value="" disabled>*-**********Bike***********-*</option>
                     <option value="" disabled>----Hero----</option>
                        <option value="Passion">Passion</option>
                        <option value="Splender">Splender</option>
                        <option value="HF">HF</option>
                     <option value="" disabled>----Yamaha----</option>
                        <option value="FZ">FZ</option>
                     <option value="" disabled>----Honda----</option>
                        <option value="CB Shine">CB Shine</option>
                     <option value="" disabled>----Harely-Davidson----</option> 
                        <option value="Iron">Iron</option>
                        <option value="Forty">Forty</option>
                </select>

                <input type='text'class='input-field' name="KilometersDriven" placeholder='Kilometers Driven' required >
                <select class='input-field'placeholder='Type of retrofication' value="Typeofretrofication" name="Typeofretrofication" required>
                    <option value="" disabled selected>Type of retrofication</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Pure EV">Pure EV</option>
                </select>
                
                <select class='input-field'placeholder='Top speed' value="Topspeed" name="Topspeed" required>
                    <option value="" disabled selected>Top speed</option>
                    <option value="25">25</option>
                    <option value="25-75">25-75</option>
                    <option value="75-100">75-100</option>
                    <option value="more than 100">more than 100</option>
                </select>
                <select class='input-field'placeholder='Range' value="Range" name="Range" required>
                    <option value="" disabled selected>Range</option>
                    <option value="72-80">72-80</option>
                    <option value="85-120">85-120</option>
                    <option value="172-200">172-200</option>
                    <option value="more than 200">more than 200</option>  
                </select>
        <select class='input-field'placeholder='City' value="City" name="City" required>
            <option value="" disabled selected>City</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Banglore">Banglore</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chennai">Chennai</option>
            <option value="Nodia">Nodia</option>
            <option value="Pune">Pune</option>
            <option value="Guragaon">Guragaon</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Anantapur">Anantapur</option>
            <option value="Vishakhapatnam">Vishakhapatnam</option>
            <option value="Bhojpur">Bhojpur</option>
			<option value="Buxar">Buxar</option>
            <option value="Porbandar">Porbandar</option>
			<option value="Surat">Surat</option>
			<option value="Darbhanga">Darbhanga</option>
		    <option value="East Champaran">East Champaran</option>
			<option value="Gaya">Gaya</option>
			<option value="Patna">Patna</option>
            <option value="Gopalganj">Gopalganj</option>
            <option value="Porbandar">Porbandar</option>
			<option value="Rajkot">Rajkot</option>
            <option value="Porbandar">Porbandar</option>
			<option value="Vadodara">Vadodara</option>
        </select>
        <br><br>
        <button onclick='f1finalbtn()' type='button' name="submit" class='submit-btn'>Continue</button>
    </div>
                    
        </div>
 

<div id="secondform" class="login-page" style="background:rgba(108, 140, 255, 0.9); width:75%; height: fit-content; position: relative; padding:10px; overflow: hidden; margin:2% auto; visibility: hidden;"  >
    <div id="by_details">
        <p class="text" style="font-size: xx-large;">Retrofit your petrol vehicle to EV</p>
        <h1>Vehicle Details</h1>
        <div class="u-photo">
            <h3>Select a file to upload</h3>
            
        <div class="file-chooser">
        <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="blc" style="cursor: pointer;" >
              Upload Front Photo Of Car <br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="blc" name='blc' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName4"></span>
              <br>
            </label>
          </div>
          <div class="uphoto" style="width: fit-content; text-align:center; padding:3%; border:thin solid black;" id="container">
            <label for="od" style="cursor: pointer;" >
            Upload Back Photo Of Car<br/>
              <i class="fa fa-2x fa-camera"></i>
              <input id="od" name='od' type="file" accept="image/*" style="display: none;"/>
              <br/>
              <span id="imageName5"></span>
              <br>
            </label>
          </div>

            <!-- <input class="file-chooser__input" type="file" accept="image/*" style="display: none;" multiple/> -->
            <!-- <input class="file-chooser__input" type="file" accept="" multiple> -->
        </div>
<div>
<br></br><br></br><br></br><br></br><br></br>
<h3>Personal Details</h3>
<input name="name" type="name" placeholder="Enter Your Name"  class = "i"required> <br>
<input name="ph" type="tel" placeholder="Enter Your Phone Number" class = "i" required> <br>
<input name="add" type="text" placeholder="Enter Your Address" class = "i" required> <br>
<br></br>
<button type='button' class='submit-btn' style="width: 300px;" value="submit_2" onclick='fnextbtn()'>Save and lookup retrofitter</button>
<br></br>
</div></div>
</div></div>


<div id="tform" class="login-page" style="background:rgba(78, 116, 230, 0.6); width:50%; height: fit-content; position: relative; padding:10px; overflow: hidden; margin:2% auto; display: none;"  >
<div id="main_details" >

<h1>SELECT YOUR RETROFITTER</h1>
<a href="http://localhost/GreenWheels/retrofication/retrofitter.html" target="_blank" style="font-size: smaller;"><h3>Click Here To Know More About Our Retrofitters</h3></a>
<br></br>
<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="Green Hyrids">
        <div>
            <img src="project_pics/retrofitter_8.webp" alt="Image 1" style="width: fit-content;">
            <div>
                <h2>GREEN HYBRIDS&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">No. 34, Seshadripuram main road,
                    
                        <i class="icofont-navigation"></i> Velacherry, Chennai
                    </div>
                    <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                        <i class="icofont-location-pin"></i> <span>Chennai</span>
                    </div>
            </div>
        </div>
        <div class="indicator"></div>
    </label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="eTrio technologies">
        <div>
            <img src="project_pics/retrofitter_9.webp" alt="Image 2" style="width: fit-content;">
            <div>
                <h2>eTrio technologies&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">4th Floor, Purva Summit, Whitefields
                    HITEC City, Hyderabad, Telangana-500081</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> , Hyderabad
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Hyderabad</span>
            </div>
        </div>

<div class="indicator"></div>
</label>
</div>

<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="pixycars">
        <div>
            <img src="project_pics/retrofitter_10.webp" alt="Image 3" style="width: fit-content;">
            <div>
                <h2>pixycars&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">Pixy Electric Cars Pvt. Ltd.
                    C/O Auto Cluster Development & Research Institute,
                    MIDC, Chinchwad, Pimpri-Chinchwad, Maharashtra 411019</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> Chinchwad, Pimpri
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Pimpri</span>
            </div>
        </div>
        <div class="indicator"></div>
    </label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="CellPropulsion">
        <div>
            <img src="project_pics/retrofitter_4.webp" alt="Image 4" style="width: fit-content;">
            <div>
                <h2>CellPropulsion&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">CellProp Pvt Ltd
                    223B, 3rd Phase, Bommasandra Industrial Area, KIADB, Bommasandra, Bengaluru, Karnataka 560099</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> Bommasandra, Bangalore
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Bangalore</span>
            </div>
        </div>
        <div class="indicator"></div>
    </label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="RacEnergy">
        <div>
            <img src="project_pics/retrofitter_2.webp" alt="Image 5" style="width: fit-content;">
            <div>
                <h2>RacEnergy&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">Hyderbad</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> ECIL, Hyderabad
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Hyderabad</span>
            </div>

        </div>
        <div class="indicator"></div>
    </label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="thezero21">
        <div>
            <img src="project_pics/retrofitter_6.webp" alt="Image 6" style="width: fit-content;">
            <div>
                <h2>thezero21&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">ZERO 21 RENEWABLE ENERGY SOLUTIONS Pvt.
                    Ltd.,
                    LIG B 44, DR A S RAO NAGAR, ECIL
                    HYDERABAD TELANGANA 500062</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> ECIL, Hyderabad
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Hyderabad</span>
            </div>
        </div>
        <div class="indicator"></div>
    </label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="Zuink retrofit">
        <div>
            <img src="project_pics/retrofitter_3.webp" alt="Image 7" style="width: fit-content;">
            <div>
                <h2>Zuink retrofit&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">Bangalore(Head office)
                    Mohan Chambers, #33, 1st Main Rd
                    3rd Phase, J. P. Nagar,
                    Karnataka 560078</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> JP Nagar, Bangalore
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Bangalore</span>
            </div>
        </div>

<div class="indicator"></div>
</label>
</div>
<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="IOI BATTERY SHOP">
        <div>
            <img src="project_pics/retrofitter_5.webp" alt="Image 7" style="width: fit-content;">
            <div>
                <h2>IOI BATTERY SHOP&nbsp;
                    <span class="workshopcerti">Generic</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">IOI BATTERY SHOP,
                    No 4/122, Old Otteri Road, GST road, Vandalur, chennai.48.</span>
                <span class="ml-1 mr-1 w-10">|</span>
            </div>
            <div class="row mb-1 retroareaname">
                <i class="icofont-navigation"></i> Vandalur, Chennai
            </div>
            <div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
                <i class="icofont-location-pin"></i> <span>Chennai</span>
            </div>
        </div>
<div class="indicator"></div>
</label>
</div>

<br></br>

<div class="radio-div">
    <label class="radio-wrapper">
        <input type="radio" name="option" value="Starya">
        <div>
            <img src="project_pics/retrofitter_1.webp" alt="Image 7" style="width: fit-content;">
            <div>
                <h2>Starya&nbsp;
                    <span class="workshopcertigreen">Certified</span>
                </h2>
                <i class="icofont-navigation"></i> <span class="contentaddress">Nagarbhavi, Bengaluru</span>						
											<span class="ml-1 mr-1 w-10">|</span>										</div>
										<div class="row mb-1 retroareaname">
											<i class="icofont-navigation"></i> NA, Bangalore										</div>
										<div class="row mb-1 retrofityclass retrofitlocations hideretrodetail">
											<i class="icofont-location-pin"></i> <span>Bangalore</span>
										</div>
        </div>
<div class="indicator"></div>
</label>
</div>

<br></br>


<button type='submit' class='submit-btn2' name='submit' id="finalSub">ADD TO CART</button>
</div>
</div>
</div>
</div>
</form>
</div>

  
<script>
    // JavaScript code to toggle the visibility of the indicator
    window.addEventListener("DOMContentLoaded", function() {
      var radioButtons = document.querySelectorAll('input[type="radio"]');
  
      radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener("change", function() {
          var indicator = document.querySelectorAll(".indicator");
          indicator.forEach(function(indicatorItem) {
            indicatorItem.style.visibility = "hidden";
          });
          var selectedIndicator = this.parentNode.querySelector(".indicator");
          selectedIndicator.style.visibility = "visible";
        });
      });
    });
  </script>
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
require_once('footer.php');
?>
</html>


<!--- PHP Code --->
