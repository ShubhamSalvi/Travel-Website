<?php
$username = filter_input(INPUT_POST, 'username');
$Address = filter_input(INPUT_POST, 'address');
$Email = filter_input(INPUT_POST, 'email');
$Subject = filter_input(INPUT_POST, 'Subject');
if (!empty($username)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (Name,Address,Email,Subject )
values ('$username','$Address','$Email','$Subject')";
if ($conn->query($sql)){
header("Location: http://localhost/abc/index.html");
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