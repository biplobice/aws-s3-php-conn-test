<?php
$hostname = "HOSTNAME";
$username = "USERNAME";
$password = "PASSWORD";
$database = "DATABASE";

$strtedAt = microtime(true);

echo "Hostname: $hostname <br>";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;port=3306;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
}

$endedAt        = microtime(true);
$msc    = $endedAt - $strtedAt;

echo "Time to mysql connect: " . $msc . ' s<br>'; // in seconds