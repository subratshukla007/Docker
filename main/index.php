
<?php

$conn = new mysqli('mysql', 'root', '');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}
?>