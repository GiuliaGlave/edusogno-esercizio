<?php

$db_servername = "localhost"; 
$db_username = "root";   
$db_password = ""; 
$db_name = 'edusogno_esercizio';    

// Crea la connessione al server MySQL
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


?>