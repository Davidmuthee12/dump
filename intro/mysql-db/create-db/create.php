<!-- MySQLi Object-oriented -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die ("Connection Failed" . $conn->connect_error);
}

// Create a database
$sql = "CREATE DATABASE mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created succesfully";
} else {
    echo "Error creating database" . $conn->error;
}

// Close connection
$conn->close();

?>