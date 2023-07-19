<html>
    <head>
    <title>Thanks For Choosing Us</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    </head>
    
    <body style="background-image: linear-gradient(rgba(36, 36, 34, 0.4),rgba(255, 33, 33, 0.4)),url(call-car.jpg); background-position: center;
background-size: cover;">

<div id="thankspage" class="login-page" style="background:rgba(238, 255, 0, 0.6); width:75%; position: relative; padding:10px; overflow: hidden; margin:2% auto; ">

<h1>Thanks For Choosing Us</h1>
<h3>Your Car Will We Shortly Listed On Our Website</h3>
<br></br><br></br>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sellev";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    
    $lplate = $_POST['lplate'];
    $state = $_POST['state'];
    $vin = $_POST['vin'];
    $trim = $_POST['trim'];
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $type = $_POST['type'];
    $mileage = $_POST['mileage'];
    $zip = $_POST['zip'];
    $keys = $_POST['keys'];
    $own = $_POST['own'];
    $condition = $_POST['condition'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $time = $_POST['time'];


    //image variables

    $frcName = $_FILES['frc']['name'];
    $frcSize = $_FILES['frc']['size'];
    $frcTempName = $_FILES['frc']['tmp_name'];

    $frcDF = 'upload/'.$frcName;
    move_uploaded_file($frcTempName, $frcDF);

    $flcName = $_FILES['flc']['name'];
    $flcSize = $_FILES['flc']['size'];
    $flcTempName = $_FILES['flc']['tmp_name'];

    $flcDF = 'upload/'.$flcName;
    move_uploaded_file($flcTempName, $flcDF);

    $brcName = $_FILES['brc']['name'];
    $brcSize = $_FILES['brc']['size'];
    $brcTempName = $_FILES['brc']['tmp_name'];

    $brcDF = 'upload/'.$brcName;
    move_uploaded_file($brcTempName, $brcDF);

    $blcName = $_FILES['blc']['name'];
    $blcSize = $_FILES['blc']['size'];
    $blcTempName = $_FILES['blc']['tmp_name'];

    $blcDF = 'upload/'.$blcName;
    move_uploaded_file($blcTempName, $blcDF);

    $odName = $_FILES['od']['name'];
    $odSize = $_FILES['od']['size'];
    $odTempName = $_FILES['od']['tmp_name'];

    $odDF = 'upload/'.$odName;
    move_uploaded_file($odTempName, $odDF);

    // Step 3: Insert the data into the database
    $sql = "insert into sellercarinfo values ('$lplate', '$state', '$vin','$year', '$make', '$trim', '$type', '$model', '$mileage', '$zip', '$frcDF', '$flcDF', '$brcDF', '$blcDF', '$odDF', '$keys', '$own', '$condition', '$fname', '$lname', '$mobile', '$email', '$time')";
    // $sql = "insert into sellercarinfo (`lplate_no`, `state`, `vin_no`, `year`, `make`, `trim`, `type`, `model`, `milegae`, `zip`, `frc`, `flc`, `brc`, `blc`, `op`, `keys`, `owner`, `condition`, `fname`, `lname`, `mobile`, `email`, `contact_time`) values ('$lplate', '$state', '$vin','$year', '$make', '$trim', '$type', '$model', '$mileage', '$zip', '$frc', '$flc', '$brc', '$blc', '$od', '$keys', '$own', '$condition', '$fname', '$lname', '$mobile', '$email', '$time')";
    if (mysqli_query($conn, $sql)) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

} else {
    echo 'post not set';
}


?>

<table>
        <tr>
            <th colspan="2">YOUR DETAILS</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $fname;?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lname;?></td>
        </tr>
        <tr>
            <td>State</td>
            <td><?php echo $state;?></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><?php echo $mobile;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td>Zip</td>
            <td><?php echo $zip;?></td>
        </tr>
        <tr>
            <td>Owner</td>
            <td><?php echo $own;?></td>
        </tr>
        <tr>
            <td>Best Time To Contact</td>
            <td><?php echo $time;?></td>
        </tr>
        <tr>
            <th colspan="2">VEHICLE DETAILS</th>
        </tr>
        <tr>
            <td>Licence Plate Number</td>
            <td><?php echo $lplate;?></td>
        </tr>
        <tr>
            <td>VIN Number</td>
            <td><?php echo $vin;?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo $year;?></td>
        </tr>
        <tr>
            <td>Make</td>
            <td><?php echo $make;?></td>
        </tr>
        <tr>
            <td>Trim</td>
            <td><?php echo $trim;?></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><?php echo $type;?></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><?php echo $model;?></td>
        </tr>
        <tr>
            <td>Mileage</td>
            <td><?php echo $mileage;?></td>
        </tr>
        <tr>
            <td>Front Right Corner</td>
            <td><img src="<?php echo $frcDF;?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <td>Front Left Corner</td>
            <td><img src="<?php echo $flcDF;?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <td>Back Right Corner</td>
            <td><img src="<?php echo $brcDF;?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <td>Back Left Corner</td>
            <td><img src="<?php echo $blcDF;?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <td>Odometer</td>
            <td><img src="<?php echo $odDF;?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <td>Condition</td>
            <td><?php echo $condition;?></td>
        </tr>
        <tr>
            <td>Keys Available</td>
            <td><?php echo $keys;?></td>
        </tr>

        <tr>
            <th colspan="2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; "><a href="http://localhost/GreenWheels/" style="color: blanchedalmond;">Confirm And Browse More<button type='button' name='home'></button></a></th>
        </tr>
        </table>



</div>