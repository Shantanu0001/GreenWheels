<?php
$conn = mysqli_connect("localhost", "root", "");
$new_db = "CREATE DATABASE user_db";
$set_db = mysqli_query($conn, $new_db);
if(!$set_db){
	die("problem in creating the database!!! ");
}
mysqli_select_db($conn, "user_db");
$new_tb = "CREATE TABLE user_form(id int(255) NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL, email varchar(255) NOT NULL, password varchar(255) NOT NULL, user_type varchar(255), primary key(id))";
$set_tb = mysqli_query($conn, $new_tb);
if(!$set_tb){
	die("problem in creating the table!!! ");
}
else{
	echo "All set database created succesfully";
}
?>