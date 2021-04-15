<?php


function Connect()
{
 

 $conn = new mysqli('localhost', 'root', '', 'visitor') or die($conn->connect_error);

 return $conn;
}
 
?>