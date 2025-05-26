<?php

define ("HOST", "sql105.byethost31.com");
define ("DBNAME", "b31_39012238_hotel_management");
define ("USER", "b31_39012238");
define ("PASSWORD", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} else {
     //echo "Connected successfully";
}
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "hotel_management"; // Make sure this matches your database name

// $conn = new mysqli($host, $user, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

?>
