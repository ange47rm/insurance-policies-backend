<?php

$connectionString = 'mysql:host=127.0.0.1;dbname=insurancedb';

try
{
$conn = new PDO($connectionString, 'root', 'PASS1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $e->getMessage();
}

var_dump($conn);
?>