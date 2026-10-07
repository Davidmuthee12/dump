<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("Could not connect. " . $e->getMessage());
}

try {
  $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
   ('John', 'Doe', 'john@example.com'),
   ('Mary', 'Moe', 'mary@example.com',
   ('Julie', 'Dooley', 'julie@example.com')";
  $conn->exec($sql);
  echo "New records inserted successfully";
} catch(PDOException $e) {
  echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>