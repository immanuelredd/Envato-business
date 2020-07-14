<?php
$name = filter_input(INPUT_POST, 'name') ;
$phone =filter_input(INPUT_POST, 'tel') ;
$email =filter_input(INPUT_POST, 'email') ;
$message =filter_input(INPUT_POST, 'message') ;
if (!empty($name)) {
if (!empty($phone)) {
if (!empty($email)) {
if (!empty($message)) {

$host ='localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'townslite';

$conn = new mySqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
die('connect Error('. mysqli_connect_errno().')'
.mysqli_connect_error());
}
else {
$sql = "INSERT INTO contact_us (name, phone, email, message)
values ('$name', '$phone', '$email', '$message')";
if ($conn->query($sql)) {
echo 'new record inserted succesfully';
}
else {
echo "Error: " . $sql ."<br>". $conn->error;
}
$conn->close();
}
}
else {
echo "Your message should not be empty";
die();
}   
}
else {
echo "Email should not be empty";
die();
}    
}
else {
echo "phone number should not be empty";
die();
}
}
else {
echo "name should not be empty";
die();
}




?>