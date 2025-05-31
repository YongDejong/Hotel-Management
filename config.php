<?php

define ("HOST", "sql105.byethost31.com");
define ("DBNAME", "b31_39012238_hotel_management");
define ("USER", "b31_39012238");
define ("PASSWORD", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} else {
     echo "Connected successfully";
}
?>
