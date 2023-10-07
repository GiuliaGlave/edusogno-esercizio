<?php

session_start();

// Includi il file db.php per la connessione al database
require_once("./assets/db/db.php");

// Ottieni i dati dal form
$email = $_POST['email'];
$password = $_POST['password'];

// Esegui una query SQL per verificare le credenziali
$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);


//se si verifica una corrispondenza (riga di dati)
if ($result->num_rows == 1) {
    // le credenziali valide, l'utente è loggato
    $_SESSION['logged_in'] = true;
    // Reindirizza l'utente alla sua home.php
    header("Location: home.php"); 
} else {
    // Credenziali non valide, mostra un messaggio di errore
   $error = "Credenziali errate o non presenti. Riprova.";
}

// Chiudi la connessione al database
$conn->close();

?>