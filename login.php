<?php
session_start();
$error = "";

// Includi il file db.php per la connessione al database
require_once("./assets/db/db.php");

// Variabile per tenere traccia dell'accesso
$attemptedLogin = false;

if (isset($_POST['login-btn'])) {
    // Imposta la variabile a true quando provi ad effettuare l'accesso
     $attemptedLogin = true;

    // Ottieni i dati dal form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Esegui una query SQL per verificare le credenziali
    $sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    //se si verifica una corrispondenza (riga di dati)
    if ($result->num_rows == 1) {
        // le credenziali sono valide, l'utente è loggato
        $row = $result->fetch_assoc();
        $_SESSION['logged_in'] = true;

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['cognome'] = $row['cognome'];
        
        // Reindirizza l'utente alla sua home.php
        header("Location: home.php");
        // dopo il reindirizzamento termina lo script
        exit();
    } else {
        // Variabile per tenere traccia dell'accesso
        $attemptedLogin = true;
        // Credenziali non valide, mostra un messaggio di errore
        $_SESSION['error_message'] = "Credenziali errate o non presenti. Riprova.";
    }
}

// Chiude la sessione corrente
session_write_close(); 

// Chiudi la connessione al database
$conn->close();
?>