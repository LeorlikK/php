<?php
echo "one";
//$msql_connect = mysqli_connect('localhost', 'root', 'root', 'registration');
$db_host = "localhost";
$db_name = "adminpanel";
$db_username = "root";
$db_pass = "root";
try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
    die('Error!');
}
?>
