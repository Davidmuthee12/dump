<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "doggy";
echo "Session variables are set." . "<br>";

// Output session variables that were set on previous page
if(isset($_SESSION["favcolor"])) {
  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  echo "Favorite animal is " . $_SESSION["favanimal"] . "." . "<br>";
} else {
  echo "No session data found." . "<br>";
}

print_r($_SESSION);
echo "<br>";
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "<br>";

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "You have been logged out." . "<br>";
?>

</body>
</html>