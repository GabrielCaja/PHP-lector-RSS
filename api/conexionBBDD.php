<?php

try {
    $host = getenv('PGHOST');
    $dbname = getenv('PGDATABASE');
    $user = getenv('PGUSER');
    $password = getenv('PGPASSWORD');
    $dsn = "pgsql:host=$host;port=5432;dbname=$dbname";

    // Crear conexión con PDO
    $conn = new PDO($dsn, $user, $password);

    // Configurar el manejo de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a PostgreSQL";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>
