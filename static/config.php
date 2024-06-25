<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'enquiry';

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn) {
  echo "connected successfully";
}
$get_name = $_POST['name'];
$get_email = $_POST['email'];
$get_phone = $_POST['phone'];
$get_message = $_POST['message'];

if (isset($_POST['submit'])) {
  $sql = "INSERT INTO enquiryform (user_name,user_email,user_phone,user_message) VALUES ($get_name,$get_email,$get_phone,$get_message)";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "Successfully Inserted";
  } else {
    echo "Inserting Error";
  }
}

echo " name :$get_name";
echo " email: $get_email";
echo " ph :$get_phone";
echo " message :$get_message";

?>