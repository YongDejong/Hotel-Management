<?php
define("HOST", "sql105.byethost31.com");
define("DBNAME", "b31_39012238_hotel_management");
define("USER", "b31_39012238");
define("PASSWORD", "ThreeEmpires0716986872");

try {
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
