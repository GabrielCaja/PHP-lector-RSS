<?php

// Obtén las variables de entorno
$host = getenv('PGHOST');
$port = 5432; // Puerto por defecto de PostgreSQL
$dbname = getenv('PGDATABASE');
$user = getenv('PGUSER');
$password = getenv('PGPASSWORD');

// Crea la conexión
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verifica si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión a PostgreSQL: " . pg_last_error());
}

echo "Conexión exitosa a PostgreSQL";

?>
