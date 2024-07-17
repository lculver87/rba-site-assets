<?php


$servername = getenv('HOST');
$username = getenv('USER');
$password = getenv('PASS');
$dbname1 = getenv('RBADB');
$dbname2 = getenv('RBASUB');

$dsn1 = "mysql:host=$servername;dbname=$dbname1;charset=UTF8";
$dsn2 = "mysql:host=$servername;dbname=$dbname2;charset=UTF8";

try {
	$conn = new PDO($dsn1, $username, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
}

try {
    $conn2 = new PDO($dsn2, $username, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}