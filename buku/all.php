<?php
include_once '../connection.php';

$query = "select * from buku";

//tentukan query statement
$statement = $connection->query($query);

//eksekusi query
$results = $statement->fetchAll();

header ('Content-Type: application/json');
echo json_encode($results);
?>