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
        <link rel="stylesheet" href="r2.css">
     
        
</head>


<body style="background-image: linear-gradient(rgba(36, 36, 34, 0.4),rgba(255, 33, 33, 0.4)),url(call-car.jpg); background-position: center;
background-size: cover; ">
     <div class="background-image-navv">
    <div id='retrofication-form'class='retrofication-page'>
        <div class="form-box" id="main-form">
            <p style="font-size: large;align-items: center;"><centre>Retrofit your petrol vehicle to EV</p>
            --------------------- Vehicle Details---------------------
            <!-- <div class='button-box'>
                 <div id='btn'></div>
                <button type='button'onclick='by_plate()'class='toggle-btn'>By Plate</button>
                <button type='button'onclick='by_vin()'class='toggle-btn'>By VIN</button>
                <button type='button'onclick='by_make()'class='toggle-btn'>By Make</button>
            </div> --> 
            <form action="retrofication_home.php" method="post" id='select_vehicle' class='select_vehicle'>
                <select class="input-field" placeholder="Vehicle Type" value="Vehicle Type" name="Vehicle Type" required>
                    <option value="" disabled selected>Vehicle Type</option>
                    <option value="Car">Car</option>
                    <option value="Bike">Bike</option>
                </select>
                <select class="input-field" placeholder="Vehicle Model Year" value="Vehicle Model Year" name="Vehicle Model Year" required>
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
                <select class="input-field" placeholder="Vehicle Brand" value="Vehicle Brand" name="Vehicle Brand" required>
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
                <select class="input-field" placeholder="Vehicle Model" value="Vehicle Model" name="Vehicle Model" required>
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

                <input type='text'class='input-field' name="Kilometers Driven"placeholder='Kilometers Driven' required >
                <select class='input-field'placeholder='Type of retrofication' value="Type of retrofication" name="Type of retrofication" required>
                    <option value="" disabled selected>Type of retrofication</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Pure EV">Pure EV</option>
                </select>
                
                <select class='input-field'placeholder='Top speed' value="Top speed" name="Top speed" required>
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
        <button href="retrofication_home_2.html" type='submit' name="submit" class='submit_1' value="submit_1">Continue</button>
     
</div>

      
<div id="secondform" class="login-page" style="background:rgba(105, 51, 255, 0.6); width:75%; position: relative; padding:10px; overflow: hidden; margin:2% auto; visibility: hidden;"  >
        <p class="text">Retrofit your petrol vehicle to EV</p>
        <h1>Vehicle Details</h1>
        <div class="u-photo">
            <h3>Select a file to upload</h3>
            <div class="u">
                <form method="post" action="retrofication2.php" class="file-uploader" action=""
                    enctype="multipart/form-data">

                    <div class="file-chooser">
                        <!-- First_image_upload -->
                        <div class="uphoto"
                            style="width: fit-content; text-align:center; padding:3%; border:thin solid black;"
                            id="container">
                            <label for="od" style="cursor: pointer;">
                                Upload your car photo<br />
                                <i class="fa fa-2x fa-camera"></i>
                                <input id="od" type="file" accept="image/*" style="display: none;" />
                                <br />
                                <span id="imageName5"></span>
                                <br>
                            </label>
                        </div>
                        <!-- Second_image_upload -->
                        <div class="uphoto"
                            style="width: fit-content; text-align:center; padding:3%; border:thin solid black;"
                            id="container">
                            <label for="od" style="cursor: pointer;">
                                Upload your car photo<br />
                                <i class="fa fa-2x fa-camera"></i>
                                <input id="od" type="file" accept="image/*" style="display: none;" />
                                <br />
                                <span id="imageName5"></span>
                                <br>
                            </label>
                        </div>

                        <!-- <input class="file-chooser__input" type="file" accept="image/*" style="display: none;" multiple/> -->
                        <!-- <input class="file-chooser__input" type="file" accept="" multiple> -->
                    </div>
                    <input class="file-uploader__submit-button button" type="submit" value="Upload">
                </form>
            </div>
        </div>
        <h3>Personal Details</h3>
        <input type="name" placeholder="Enter Your Name"  class = "i"required> <br>
      <input type="tel" placeholder="Enter Your Phone Number" class = "i" required> <br>
      <input type="text" placeholder="Enter Your Address" class = "i" required> <br>
      <button type='submit' class='file-uploader__submit-button' style="width: 300px;" value="submit_2">Save and lookup retrofitter</button>

      <script>
        let input5 = document.getElementById("od");
        let imageName5 = document.getElementById("imageName5")

        input5.addEventListener("change", () => {
          imageName5.innerText = "Uploaded!";
        })
    </script>
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

</html>


<!--- PHP Code --->
