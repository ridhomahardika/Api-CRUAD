<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $a * $b - $c;
 
$reply = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
    'hasil' => $d
];

header('Content-Type: application/json');
echo json_encode($reply);
?>