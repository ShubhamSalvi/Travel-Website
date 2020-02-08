<?php
$username = filter_input(INPUT_POST, 'user');
$location = filter_input(INPUT_POST, 'loc');
$email = filter_input(INPUT_POST, 'email');
$days = filter_input(INPUT_POST, 'days');
$people = filter_input(INPUT_POST, 'people');
$budget = filter_input(INPUT_POST, 'budget');
if (!empty($username)||!empty($location)||!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bookonline";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO booking (username,location, email, days ,people, budget)
values ('$username','$location','$email','$days','$people','$budget')";
if ($conn->query($sql)){
header("Location: http://localhost/abc/BookOnline.html ");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Username should not be empty";
die();
}
?>