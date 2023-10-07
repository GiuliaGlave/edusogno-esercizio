<?php
    // Connessione al database
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = 'edusogno_esercizio';

    $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

    // Verifica la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

// Variabili per i messaggi
$messaggio_registrazione = "";
$errore_email = "";

    // Verifica se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    // Query per verificare l'unicità dell'indirizzo email
    $check_email_query = "SELECT email FROM utenti WHERE email='$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        $errore_email = "L'indirizzo email è già presente nel database";
    } else {
        // L'indirizzo email è unico, quindi inserisci l'utente nel database
        $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $messaggio_registrazione = "Nuovo utente creato con successo!";
        } else {
            $errore = "Errore nell'inserimento dell'utente: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="./assets/styles/register.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/mediaqueries.css">

    <title>Edusogno</title>
</head>

<body>
    <div class="container">


        <form action="register.php" method="post">

            <header>
                <div class="logo">
                    <img src="./assets/img/Group 181.svg" alt="logo">
                </div>
            </header>

            <main>
                <h1 class="title">Crea il tuo account</h1>

                <div class="form-container">
                    <div class="form-content">
                        <label>Inserisci il nome</label>
                        <input type="text" name="nome" placeholder="Mario" required><br>

                        <label>Inserisci il cognome</label>
                        <input type="text" name="cognome" placeholder="Rossi" required><br>

                        <label>Inserisci l'e-mail</label>
                        <input type="email" name="email" placeholder="name@example.com" required><br>

                        <div class="password-container">
                            <label>Inserisci la password</label>
                            <input class="password" type="password" name="password" placeholder="Scrivila qui" required>
                            <i class="fa-solid fa-eye"></i>
                        </div>

                        <button type="submit">REGISTRATI</button>

                        <!-- Validator -->
                        <p class="success"><?php echo $messaggio_registrazione; ?></p>
                        <p class="error"><?php echo $errore_email; ?></p>

                        <p class="change-page">Hai già un account? <span><a href="index.php">Accedi</a></span></p>
                    </div>

                </div>

            </main>


        </form>
    </div>

    <!-- BACKGROUND -->

    <div class="background">
        <!-- waves -->
        <img class="wave wave1" src="./assets/img/svg1.svg" alt="">
        <img class="wave wave2" src="./assets/img/svg2.svg" alt="">
        <img class="wave wave3" src="./assets/img/svg3.svg" alt="">

        <!-- graphic -->
        <img class="circle-big" src="./assets/img/svg-circle.svg" alt="">
        <img class="circle-small" src="./assets/img/svg-circle.svg" alt="">
        <img class="rocket" src="./assets/img/svg-rocket.svg" alt="">

    </div>
    </div>
</body>

</html>