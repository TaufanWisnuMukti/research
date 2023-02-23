<?php

echo "Hello, This is page WEB 1";

?>

<?php
$servername = "mysql";
$username = "app1";
$password = "passapp1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php

phpinfo();
?>
