<?php
$host = 'localhost';
$dbname = 'gebruikers';
$username = 'root';
$password = '';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Fout bij verbinden met de database: " . $e->getMessage();
    exit();
}