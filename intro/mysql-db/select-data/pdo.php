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
  $sql = "SELECT id, firstname, lastname FROM MyGuests";
  // Execute the SQL query
  $result = $conn->query($sql);
  // Process the result set
  if ($result->rowCount() > 0) {
    echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";
    // Output data of each row
    while($row = $result->fetch()) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    unset($result);
  } else {
    echo "No records found.";
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>