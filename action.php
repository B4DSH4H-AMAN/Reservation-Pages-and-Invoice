<?php

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$NumberStreet = $_POST["Number&Street"];
$City = $_POST["City"];
$State = $_POST["State"];
$ZipCode = $_POST["Zip-Code"];
$CheckinDate = $_POST["Check-in-Date"];
$CheckoutDate = $_POST["Check-out-Date"];
$Peopl = $_POST["People"];
$Phone = $_POST["Phone"];
$email = $_POST["email"];
$Payment = $_POST["Payment"];
$CardNumber = $_POST["Card-Number"];
$Requests = $_POST["Requests"];

echo "$Fname,$Lname,$NumberStreet,$City,$State,$ZipCode,$CheckinDate,$CheckoutDate,$Peopl,$Phone,$email,$Payment,$CardNumber,$Requests";

echo "Hello World";

?>