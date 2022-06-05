<?php
$dbserver = 'localhost';
$dbname = 'web4a';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO ($dsn, $dbuser, $dbpassword);

}catch (PDOException $e) {
}

?>