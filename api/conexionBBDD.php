<?php

$host = "ep-morning-resonance-a2jg0as0-pooler.eu-central-1.aws.neon.tech";
$user = "neondb_owner";
$password = "npg_wtCf0dbXFSy4";
$database = "neondb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>