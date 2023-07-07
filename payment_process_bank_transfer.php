<?php
//Linking the configuration file
require 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
 
  $bankName=$_POST['bankName'];
  $yourName=$_POST['yourName'];
  $branchName=$_POST['branchName'];
  $email=$_POST['email'];
  $price2=$_POST['price2'];


$sql= "INSERT INTO bank_transfer (`Bank_name`, `Your_Name`, `Branch_Name`, `Email`) VALUES ('".$bankName."', '".$yourName."', '".$branchName."', '".$email."')";

  if($con->query($sql)){
  echo "added successfully";
  header("Location:home_registeredUser.php");
  exit();
  }


  else{
  echo "Error:". $con->error;
  }
  $con->close();

}
  ?>