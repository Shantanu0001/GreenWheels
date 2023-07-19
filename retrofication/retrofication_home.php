<?php

$conn=mysqli_connect("localhost","root","","RETROFICATION");

// $retroficationdb="CREATE DATABASE RETROFICATION";
// $set_db=mysqli_query($conn,$retroficationdb);

if(!$conn){
    die("Problem in crearing database");
}



if(isset($_POST['submit']))  
{  
    $VlType=$_POST['Vehicle Type'];
    $VlMdlYr=$_POST['Vehicle Model Year'];
    $VlBrand=$_POST['Vehicle Brand'];
    $VlMdl=$_POST['Vehicle Model'];
    $DistanceTravel=$_POST['Kilometers Driven'];
    $TypeOfRetrofication=$_POST['Type of retrofication'];
    $TopSpeed=$_POST['Top speed'];
    $RANGE=$_POST['Range'];
    $CITY=$_POST['City'];
}

?>