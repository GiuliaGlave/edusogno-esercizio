<?php

$servername = "localhost"; 
$username = "root";   
$password = "root"; 
$db_name = 'edusogno_esercizio';    

// Crea la connessione al server MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

?>