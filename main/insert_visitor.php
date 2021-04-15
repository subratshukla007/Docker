require 'connection.php';
$conn	= Connect();
$name	= $conn->real_escape_string($_POST['name']);
$addr	= $conn->real_escape_string($_POST['addr']);
$phone	= $_POST['phone'];
$db 	= "visitor";
$query	= "INSERT into $db (name,addr,phone) VALUES ('" . $name . "','" . $addr . "','" . $phone . '")";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Registering! We will be contacting you shortly <br>";