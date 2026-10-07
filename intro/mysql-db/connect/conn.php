<!-- Thi is mysqli object-oriented -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

// create a connection to db
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "connected successfully";

?>