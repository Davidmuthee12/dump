<!-- Example - PDO with Prepared Statements (Named arguments) -->
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
  $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
  // Prepare the SQL query template
  $stmt = $conn->prepare($sql);
  // Bind parameters
  $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
  $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);

  // Execute with values
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();
  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$stmt = null;
$conn = null;
?>