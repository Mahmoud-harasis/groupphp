<?php
$dsn = 'mysql:host=localhost;dbname=people'; // Data Source Name
$user = 'root'; // The user name - default root
$pass = ''; // Password - default empty

try {
$conn = new PDO($dsn, $user, $pass); // Start a New connection with PDO class

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



}
catch(PDOException $e) {
    echo 'Failed' . $e->getMessage();
}
?>
